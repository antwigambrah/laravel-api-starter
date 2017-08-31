<?php 
namespace App\Account\Domain\Services\Auth;

use Auth;
use Validator;
use App\Account\Domain\Models\User;

class LoginService
{



 /**
  * Validate user input credentials
  *
  * @param array $user
  * @return void
  */
 public function validateUser(array $credentials)
 {

  $validation = Validator::make($credentials, [
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
 public function authenticateUser(array $credentials)
 {
  $auth = Auth::attempt($credentials);

  return $auth;
 }

 public function generateToken()
 {


  return Auth::user()->createToken(Auth::user()->email)->accessToken;

 }

 public function loginUser(array $user)
 {
  if ($this->validateUser($user)->fails()) {

   return response()->json([
    'errors' => $this->validateUser($user)->messages()
   ]);

  }

  return !$this->authenticateUser($user) ? response('unauthenticated', 401) : response()->json([

   'access_token' => $this->generateToken()
  ]);
 }

}
