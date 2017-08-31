<?php
namespace App\Account\Domain\Services\Auth;

use App\Account\Domain\Repositories\Contracts\UserRepositoryInterface;
use Validator;

class RegisterService
{

 /**
  * repository
  * @var [string]
  */
 protected $repository;



 public function __construct(UserRepositoryInterface $repository)
 {
  $this->repository = $repository;
 }

 /**
  * Register new Users
  *
  * @param array $user
  * @return $user;
  */
 public function registerUser(array $user)
 {


  if ($this->validateUser($user)->fails()) {

   return $this->validateUser($user)->messages();
  }
  return $this->repository->create($user);
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
   'name' => 'required',
   'email' => 'required',
   'password' => 'required',
   'mobile_no' => 'required'
  ]);

  return $validation;

 }



}
