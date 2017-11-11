## Vote System
1. 系統參考[Medium-使用 Laravel 5.4 製作 Facebook 登入](https://medium.com/@krunallathiya/login-with-facebook-in-laravel-5-4-3c783fdc2b9d)
### 設定 config/services.php
```
'facebook' => [
    'client_id' => 'XXX',
    'client_secret' => 'XXX',
    'redirect' => 'http://localhost/callback',
],
```

