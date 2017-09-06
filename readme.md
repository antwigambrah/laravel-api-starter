## Rest Api with Laravel(5.5)

A simple jwt rest api starter  

## Want to Build Upon It ?

First, clone the repo:
```bash
$ git clone git@github.com:antwigambrah/laravel-api-starter.git
```

### Install dependencies
```
$ cd laravel-api-starter
$ composer install
```

### Configure the Environment in the .env file

Run the Artisan migrate 
```bash
$ php artisan migrate 
```

### Create passport  oauth2 clients  to generate access tokens:
```bash
$ php artisan passport:install
```
### Api routes 
| HTTP Method	| Path | Action | Desciption  |
| ----- | ----- | ----- | ------------- |
| GET      | /api/v1/auth/register| register | Register a new account
| POST     | /api/v1/auth/login| login | Login 
| GET      | /api/user| getUserDetails|  Fetch authenticated user

### Create new User Account

![userregister](https://user-images.githubusercontent.com/12635930/30114883-feee2800-92cd-11e7-9030-623771b6c41b.PNG)


### Login to user to authenticate user and generate access token

![loginaccesstoken](https://user-images.githubusercontent.com/12635930/30114975-37684f62-92ce-11e7-91f7-7ea0e68ac3cd.PNG)


### Access authenticated user with access token

![userdata](https://user-images.githubusercontent.com/12635930/30114993-4865d906-92ce-11e7-9c2d-c494132a8bf5.PNG)


### License

 [MIT license](http://opensource.org/licenses/MIT)




