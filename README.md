# UserRegistration
This is multi step user registration in Laravel.

####  System Requirments:

- PHP >= 7.3
- Composer
- Several other extensions required to run Laravel 8.* version on below link.
- https://laravel.com/docs/8.x/deployment


####  Clone this repository:

```bash
$ git clone https://github.com/RahatHameed/UserRegistration.git
```

####  Create Local Database:

- Create empty database on your wamp / xamp server named as "wundermobility" mentioned in .env file
- Please make sure rest of database credentials are also correct in your environment file.

#### Install composer packages:

```bash
$ composer install 
```

#### Create Database schema:

```bash
$ php artisan migrate 
```

## Start tests

- Run tests:
  - `./vendor/bin/phpunit`

#### Build Server:

```bash
$ php artisan serve
```

## Start the website

- Visit `http://127.0.0.1:8000` in your browser to see the starting page.


#### Possible Future Enhancement:
- We can use other caching tools like redis or memcache for better performance if required.
- We can more add Unit / Integration testing to test our code.
- We can also dockerize our application in future as well.