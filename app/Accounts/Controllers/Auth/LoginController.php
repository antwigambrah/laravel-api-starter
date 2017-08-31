<?php 
namespace App\Account\Controllers\Auth;

use App\Account\Domain\Services\Auth\LoginService;
use Illuminate\Http\Request;
use Auth;
use App\Account\Domain\Models\User;


class LoginController
{

 /**
  * Login service
  *
  * @var [string]
  */
 protected $service;


 /**
  * Access token 
  *
  * @var [string]
  */
 private $token;


 /**
  * Create a new instance of the login service class
  */
 public function __construct(LoginService $service)
 {
  $this->service = $service;


 }

 public function login(Request $request)
 {


  if (!$this->service->loginUser($request->all())) {

   return response('unauthenticated', 401);

  }

  $token = $this->service->generateToken();

  return response()->json([

   'access_token' => $token
  ]);




 }

}
