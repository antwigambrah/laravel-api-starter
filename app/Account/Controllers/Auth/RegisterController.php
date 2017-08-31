<?php 
namespace App\Account\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Account\Domain\Models\User;
use App\Account\Domain\Services\Auth\RegisterService;


class RegisterController extends Controller
{

 /**
  * Register service
  *
  * @var [string]
  */
 protected $service;

 /**
  * Create a new Registerservice Instance
  *
  * @param RegisterService $service
  */
 public function __construct(RegisterService $service)
 {
  $this->service = $service;
 }

 /**
  * Register a new user
  *
  * @param Request $request
  * @return $response
  */
 public function register(Request $request)
 {


  $user = $this->service->registerUser($request->all());

  return response()->json([
   'user' => $user
  ]);

 }

}
