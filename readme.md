## Rest Api with [Laravel(5.5)](https://laravel.com/)

An oauth2  rest api starter 

## Want to Build Upon It ?

First, clone the repo:
```bash
$ git clone git@github.com:antwigambrah/laravel-api-starter.git
```

##  Install dependencies
```
$ cd laravel-api-starter
$ composer install
```

## Configure  environment in the .env file

Run the Artisan migrate 
```bash
$ php artisan migrate 
```

## Create passport  oauth2  personal clients  to generate access tokens
 [Personal Access Tokens)](https://laravel.com/docs/5.5/passport#personal-access-tokens)

To create both personal access clients and password access clients 
```bash
$ php artisan passport:install
```
or 

To create password access clients
```bash
$ php artisan passport:client --password
```

N:B The Grant type for the oauth2 implementation is Resource owner credentials grant(Password grant)  which allows your application(client)
to create tokens for authenticated users after every login.This is mostly suitable when API may be consumed by your web application, mobile applications etc where a user token is issued after user is authenticated as in jwts.

## Api routes 

| HTTP Method	| Path | Action | Desciption  |
| ----- | ----- | ----- | ------------- |
| POST    | /api/v1/auth/register| register | Register a new account
| POST     | /api/v1/auth/login| login | Login 
| GET      | /api/user| getUserDetails|  Fetch authenticated user

## Create new User Account

![userregister](https://user-images.githubusercontent.com/12635930/30114883-feee2800-92cd-11e7-9030-623771b6c41b.PNG)


## Generate access token

![loginaccesstoken](https://user-images.githubusercontent.com/12635930/30114975-37684f62-92ce-11e7-91f7-7ea0e68ac3cd.PNG)


## Access authenticated user with token

![userdata](https://user-images.githubusercontent.com/12635930/30114993-4865d906-92ce-11e7-9c2d-c494132a8bf5.PNG)


## License

 [MIT license](http://opensource.org/licenses/MIT)




