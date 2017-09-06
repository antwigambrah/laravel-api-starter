## Rest Api with Laravel(5.5)

A simple jwt rest api starter  built with laravel framework

##Want to Build Upon It ?

First, clone the repo:
```bash
$ git clone git@github.com:antwigambrah/laravel-api-starter.git
```

#### Install dependencies
```
$ cd laravel-api-starter
$ composer install
```

#### Configure the Environment in the .env file

Run the Artisan migrate command with seed:
```bash
$ php artisan migrate 
```

Create "personal access" and "password grant" clients which will be used to generate access tokens:
```bash
$ php artisan passport:install

### Current api routes
| HTTP Method	| Path | Action | Desciption  |
| ----- | ----- | ----- | ------------- |
| GET      | /api/v1/auth/register| register | Register a new account
| POST     | /api/v1/auth/login| login | Login 
| GET      | /api/user| getUserDetails|  Fetch authenticated user
