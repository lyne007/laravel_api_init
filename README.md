# laravel-api-init
laravel8.5集成快速开发API项目

下载
```bash
git clone git@github.com:lyne007/laravel-api-init
```
修改.env.example为.env
```shell
#数据库
DB_DATABASE=laravel-api-init
DB_USERNAME=homestead
DB_PASSWORD=secret
```

生成 APP_KEY
```bash
php artisan key:generate
```

生成jwt密钥
```bash
php artisan jwt:secret
```
安装依赖
```bash
composer install
```
