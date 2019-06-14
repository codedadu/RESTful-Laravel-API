# Documentation for Use this Project

### Create Database in MySQL Server

- CREATE DATABASE restful_ukmdb;

### Delete Some File for Run in First Step

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

## Adding Field api_token in Table User

- Open `add_api_token_field_users --table=users` in `database/migrations` Add a few lines of code as below

```php
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('api_token', 100)->unique()->after('remember_token');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('api_token');
        });
    }
```

### Create Faker

- php artisan migrate
- $ php artisan db:seed --class=UserSeeder `If Post with Faker`

### Setting UserSeeder

- Edit file UserSeeder.php

```php
    public function run()
    {
        $user = new \App\User;
        $user->name = "Rusydi Faridi";
        $user->email = "rusydi@rbs.sch.id";
        $user->password = Hash::make("224423223");
        $user->api_token = str_random(100);
        $user->save();
    }
```

- $ php artisan db:seed --class=UserSeeder

### Running Again

- $ php artisan serve