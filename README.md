# Lumen-JWT-integration [![License: GPL v3](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)
JWT authentication for Lumen 5.6

### Following Commands can be used during integration and deployment process
### php artisan key:generate
APP_KEY=base64:z3g0MdeUkI7M70p4RxeafrV0uBM5K4NnskEpKRhnVvg=

### generate jwt secret from https://jwt.io/
JWT_SECRET=coB_mtdXwvi9RxSMzbIey8GVVQLv9qQrBUqmc1qj9Bs

### php artisan command
	php artisan make:migration create_users_table
	php artisan migrate
	php artisan db:seed

### composer command
	composer dump-autoload
	composer require firebase/php-jwt

### run application
	php -S localhost:8000 -t public


### use postman for testing
	http://localhost:8000/auth/login
	http://localhost:8000/users
