## Rest Api with Laravel(5.5)

A simple jwt rest api starter  

## Want to Build Upon It ?

First, clone the repo:
```bash
$ git clone git@github.com:antwigambrah/laravel-api-starter.git
```

####  Install dependencies
```
$ cd laravel-api-starter
$ composer install
```

#### Configure the Environment in the .env file

Run the Artisan migrate 
```bash
$ php artisan migrate 
```

#### Create passport  oauth2 clients  to generate access tokens:
```bash
$ php artisan passport:install
```
#### Api routes 
| HTTP Method	| Path | Action | Desciption  |
| ----- | ----- | ----- | ------------- |
| GET      | /api/v1/auth/register| register | Register a new account
| POST     | /api/v1/auth/login| login | Login 
| GET      | /api/user| getUserDetails|  Fetch authenticated user

####Create new User Account

![registration](/public/images/userregister.png?raw=true "register")

####Login to user to authenticate user and generate access token

![authentication](/public/images/loginaccesstoken.png?raw=true "authenticate")

####Access authenticated user with generated access token

![authentication](/public/images/userdata.png?raw=true "authenticate")

####License

 [MIT license](http://opensource.org/licenses/MIT)




