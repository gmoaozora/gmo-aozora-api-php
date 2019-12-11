# **Ganb\Auth**

All URIs are relative to *https://stg-api.gmo-aozora.com/ganb/api/auth/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authorization**]() | **POST** /authorization | 認可


### **authorization**
> \Ganb\Auth($clientID, $clientSecret, $authMethod, $config)

### 認可

クライアントがユーザーの認証・認可を得るためのエンドポイント

### Example

#### authorization
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

const CLIENT_ID = "<Your Client ID>";
const CLIENT_SECRET = "<Your Client Secret>";
const REDIRECT_URI = "<Your Registered Redirect URI>";
const AUTH_METHOD = "BASIC"; // Your Auth method BASIC or POST

// Authorization
$ganb = new Ganb\Auth(CLIENT_ID, CLIENT_SECRET, AUTH_METHOD);

$redirectUrl = $ganb->oauthAuthorization("<Your Session ID>", "<Your socpe>", REDIRECT_URI);
//If you want use openid => $redirectUrl = $ganb->openIDAuthorization("<Your Session ID>", "<Your socpe>", REDIRECT_URI);

echo $redirectUrl;
```

#### get new token
```
<?php
require_once(__DIR__ . '/vendor/autoload.php');

const CLIENT_ID = "<Your Client ID>";
const CLIENT_SECRET = "<Your Client Secret>";
const REDIRECT_URI = "<Your Registered Redirect URI>";
const AUTH_METHOD = "BASIC"; // Your Auth method BASIC or POST

$ganb = new Ganb\Auth(CLIENT_ID, CLIENT_SECRET, AUTH_METHOD);

try {
    $token = $ganb->getOAuthToken(REDIRECT_URI, "<Your code>");
    var_dump($token);
} catch (Exception $e) {
    echo $e->getMessage();
}
```

#### refresh token
```
<?php
require_once(__DIR__ . '/vendor/autoload.php');

const CLIENT_ID = "<Your Client ID>";
const CLIENT_SECRET = "<Your Client Secret>";
const AUTH_METHOD = "BASIC"; // Your Auth method BASIC or POST

$ganb = new Ganb\Auth(CLIENT_ID, CLIENT_SECRET, AUTH_METHOD);

try {
    $newToken = $ganb->refreshTokens("<Your Refresh Token>");
    var_dump($newToken);
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

### refreshTokens($refreshToken)
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **err** | **ClientException**| api error instance |
 **refreshToken** | **string**| refresh token |
 