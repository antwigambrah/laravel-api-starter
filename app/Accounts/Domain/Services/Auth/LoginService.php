<?php 
namespace App\Account\Domain\Services\Auth;

use Auth;
use Validator;
use App\Account\Domain\Models\User;

class LoginService
{

 public function loginUser(array $user)
 {

  if ($this->validateUser($user)->fails()) {

   return $this->validateUser($user)->messages();
  }

  return $this->authenticateUser($user);

 }

 /**
  * Validate user input credentials
  *
  * @param array $user
  * @return void
  */
 public function validateUser(array $user)
 {

  $validation = Validator::make($user, [
   'email' => 'required',
   'password' => 'required',
  ]);

  return $validation;

 }



 /**
  * Authenticates user by attempting to login
  *
  * @param array $user
  * @return void
  */
 public function authenticateUser(array $user)
 {
  $auth = Auth::attempt($user);

  return $auth;
 }

 public function generateToken()
 {


  return Auth::user()->createToken(Auth::user()->email)->accessToken;

 }

}
