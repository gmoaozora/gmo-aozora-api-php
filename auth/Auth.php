<?php

namespace Ganb;

class Auth
{
    public $clientID;
    public $clientSecret;
    public $authMethod;
    public $nonce;
    public $config;

    public function __construct($clientID, $clientSecret, $authMethod, $nonce = null)
    {
        $this->clientID = $clientID;
        $this->clientSecret = $clientSecret;
        $this->authMethod = $authMethod;
        $this->nonce = $nonce;
        $this->config = $this->getConfig();
    }

    public function oauthAuthorization($sessionID, $scope, $redirectUrl)
    {
        $state = $this->getState($sessionID, $this->config['SALT']);
        //$param
        $param['response_type'] = 'code';
        $param['scope'] = $scope;
        $param['client_id'] = $this->clientID;
        $param['state'] = $state;
        $param['redirect_uri'] = $redirectUrl;

        return $this->config['AUTH_BASE_URL'].$this->config['AUTH_PATH'].'?'.http_build_query($param);
    }

    public function getOAuthToken($redirectUri, $code)
    {
        $param['code'] = $code;
        $param['redirect_uri'] = $redirectUri;
        $param['grant_type'] = 'authorization_code';
        $headers['Content-Type'] = 'application/x-www-form-urlencoded';
        if ($this->authMethod === 'BASIC') {
            $headers['Authorization'] = $this->authorizationHeader($this->clientID, $this->clientSecret);
        } else {
            $param['client_id'] = $this->clientID;
            $param['client_secret'] = $this->clientSecret;
        }

        $tokenUrl = $this->config['AUTH_BASE_URL'].$this->config['TOKEN_PATH'];

        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->request('POST', $tokenUrl, ['headers' => $headers, 'form_params' => $param]);

            $token = json_decode($response->getBody());
            if ($token != null && property_exists($token, 'access_token') && property_exists($token, 'refresh_token')) {
                return $token;
            } else {
                throw new \Exception('token format error');
            }
        } catch (GuzzleHttp\Exception\ClientException $e) {
            throw $e;
        }
    }

    public function openIDAuthorization($sessionID, $scope, $redirectUri)
    {
        $state = $this->getState($sessionID, $this->config['SALT']);
        $nonce = sha1(uniqid(mt_rand(), true));
        $this->storeNonce($nonce);

        $param['response_type'] = 'code';
        $param['scope'] = $scope;
        $param['client_id'] = $this->clientID;
        $param['redirect_uri'] = $redirectUri;
        $param['state'] = $state;
        $param['nonce'] = $this->loadNonce();

        return $this->config['AUTH_BASE_URL'].$this->config['AUTH_PATH'].'?'.http_build_query($param);
    }

    public function getOpenIDToken($redirectUri, $code)
    {
        $headers['Content-Type'] = 'application/x-www-form-urlencoded';
        $param['code'] = $code;
        $param['grant_type'] = 'authorization_code';
        $param['redirect_uri'] = $redirectUri;
        if ($this->authMethod === 'BASIC') {
            $headers['Authorization'] = $this->authorizationHeader($this->clientID, $this->clientSecret);
        } else {
            $param['client_id'] = $this->clientID;
            $param['client_secret'] = $this->clientSecret;
        }
        $tokenUrl = $this->config['AUTH_BASE_URL'].$this->config['TOKEN_PATH'];

        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->request('POST', $tokenUrl, ['headers' => $headers, 'form_params' => $param]);
            $token = json_decode($response->getBody());
            if ($token != null && property_exists($token, 'access_token') && property_exists($token, 'refresh_token') && property_exists($token, 'id_token')) {
                $nonceCheckResult = $this->isValidToken($refresh_token['id_token'], $this->clientSecret, $this->loadNonce());
                if ($nonceCheckResult == true) {
                    return $token;
                } else {
                    throw new \Exception('nonce check faild');
                }
            } else {
                throw new \Exception('token format error');
            }
        } catch (GuzzleHttp\Exception\ClientException $e) {
            throw $e;
        }
    }

    public function refreshTokens($refresh_token)
    {
        $headers['Content-Type'] = 'application/x-www-form-urlencoded';
        $tokenUrl = $this->config['AUTH_BASE_URL'].$this->config['TOKEN_PATH'];
        if ($this->authMethod === 'BASIC') {
            $headers['Authorization'] = $this->authorizationHeader($this->clientID, $this->clientSecret);
        } else {
            $param['client_id'] = $this->clientID;
            $param['client_secret'] = $this->clientSecret;
        }
        $param['grant_type'] = 'refresh_token';
        $param['refresh_token'] = $refresh_token;

        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->request('POST', $tokenUrl, ['headers' => $headers, 'form_params' => $param]);
            $token = json_decode($response->getBody());
            if ($token != null && property_exists($token, 'access_token') && property_exists($token, 'refresh_token')) {
                return $token;
            } else {
                throw new \Exception('token format error');
            }
            return $token;
        } catch (GuzzleHttp\Exception\ClientException $e) {
            throw $e;
        }
    }

    public function isValidToken($idToken, $clientSecret, $nonceInstance)
    {
        try {
            $decodedToken = \Firebase\JWT\JWT::decode($idToken, $clientSecret, array('HS256'));
            if ($decodedToken['nonce'] === $nonceInstance) {
                return true;
            }
        } catch (Exception $e) {
            //echo $e->getMessage()
        }
        return false;
    }

    private function getConfig()
    {
        $json = file_get_contents(__DIR__."/conf.json");
        $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        return json_decode($json, true);
    }

    private function getState($sessionID, $salt)
    {
        return hash('sha256', $sessionID.$salt);
    }

    private function authorizationHeader($clientID, $clientSecret)
    {
        return 'Basic '.base64_encode($clientID.':'.$clientSecret);
    }

    private function storeNonce($nonce)
    {
        //implement nonce load solution
        //
    }

    private function loadNonce()
    {
        //implement nonce store solution ex) file, db
        //
        return "YourNonce";
    }
}
