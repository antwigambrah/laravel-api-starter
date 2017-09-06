## Rest Api with Laravel(5.5)

A simple jwt rest api starter  

##Want to Build Upon It ?

First, clone the repo:
```bash
$ git clone git@github.com:antwigambrah/laravel-api-starter.git
```

####Install dependencies
```
$ cd laravel-api-starter
$ composer install
```

####Configure the Environment in the .env file

Run the Artisan migrate 
```bash
$ php artisan migrate 
```

####Create passport  oauth2 clients  to generate access tokens:
```bash
$ php artisan passport:install

### Current api routes
| HTTP Method	| Path | Action | Desciption  |
| ----- | ----- | ----- | ------------- |
| GET      | /api/v1/auth/register| register | Register a new account
| POST     | /api/v1/auth/login| login | Login 
| GET      | /api/user| getUserDetails|  Fetch authenticated user
```

####Create new User Account
![account registration](https://raw.github.com/antwigambrah/laravel-api-starter/master/public/images/userregister.png)

####Login to user to authenticate user and generate access token

![authenticate user ](https://raw.github.com/antwigambrah/laravel-api-starter/master/public/images/loginaccesstoken.png)

####Access authenticated user with generated access token
![access use data](https://raw.github.com/antwigambrah/laravel-api-starter/master/public/images/userdata.png)

####License

 [MIT license](http://opensource.org/licenses/MIT)




