<?php 
namespace App\Account\Controllers\Auth;

use App\Account\Domain\Services\Auth\LoginService;
use Illuminate\Http\Request;
use Auth;
use App\Account\Domain\Models\User;
use Validator;


class LoginController
{

 protected $service;

 public function __construct(LoginService $service)
 {
  $this->service = $service;
 }
 public function login(Request $request)
 {

  return $this->service->loginUser($request->all());
 }

}
