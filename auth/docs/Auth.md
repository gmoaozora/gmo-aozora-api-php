# **Ganb\Auth**

All URIs are relative to *https://api.gmo-aozora.com/ganb/api/auth/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authorization**]() | **POST** /authorization | 認可


### **authorization**
> \Ganb\Auth($clientID, $clientSecret, $authMethod, $config)

認可

クライアントがユーザーの認証・認可を得るためのエンドポイント

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

const CLIENT_ID = "<Your Client ID>";
const CLIENT_SECRET = "<Your Client Secret>";
const REDIRECT_URI = "<Your Registered Redirect URI>";
const AUTH_METHOD = "BASIC"; // Your Auth method BASIC or POST

$ganb = new Ganb\Auth(CLIENT_ID, CLIENT_SECRET, AUTH_METHOD, $config);

$redirectUrl = $ganb->oauthAuthorization($_SESSION['uid'], $scope, $requetTokenOAuthUrl);
//If you want use openid => $redirectUrl = $ganb->openIDAuthorization($_SESSION['uid'], $scope, $requetTokenOAuthUrl);

//Get OAuth token
$token = $ganb->getOAuthToken(REDIRECT_URI, $code);
try {
    $token = $ganb->getOAuthToken(REDIRECT_URI, $code);
} catch (Exception $e) {
    echo $e->getMessage();
}

//Token refresh
try {
    $newToken = $ganb->refreshSession($e, $token);
} catch (Exception $e) {
    echo $e->getMessage();
}
```

### Initialization parameters 
\Ganb\Auth($clientID, $clientSecret, $authMethod, $config)

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientID** | **string**| client id |
 **clientSecret** | **string**| client secret |
 **authMethod** | **string**| "BASIC" or "POST" |
 **config** | **array**| "SALT"=>"","AUTH_BASE_URL"=>"","AUTH_PATH"=>"","TOKEN_PATH"=>"","JWT_ISSUER"=>"" |

### oauthAuthorization($sessionID, $scope, $redirectUri)
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionID** | **string**| session id |
 **scope** | **string**| scope |
 **redirectUri** | **string**| redirect uri |

### openIDAuthorization($sessionID, $scope, $redirectUri)
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionID** | **string**| session id |
 **scope** | **string**| scope |
 **redirectUri** | **string**| redirect uri |

### getOAuthToken($redirectUri, $code)
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **redirectUri** | **string**| redirect uri |
 **code** | **string**| authorization code |

### getOpenIDToken($redirectUri, $code)
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **redirectUri** | **string**| redirect uri |
 **code** | **string**| authorization code |

### refreshSession($err, $token)
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **err** | **ClientException**| api error instance |
 **token** | **Array**| token instance |