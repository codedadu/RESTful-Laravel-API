# Documentation for Use this Project

### Create Database in MySQL Server

- CREATE DATABASE restful_ukmdb;

### Setting in .env in this Project

```shell
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database
DB_USERNAME=username
DB_PASSWORD=password
```

### Set First Step

- $ php artisan migrate
- $ php artisan make:migration add_api_token_field_users --table=users

### Create Faker

- $ php artisan db:seed --class=UserSeeder (If Get Again)
- $ php artisan db:seed --class=UserSeeder