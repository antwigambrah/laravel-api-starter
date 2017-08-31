<?php
namespace App\Account\Domain\Repositories\Contracts;

interface UserRepositoryInterface
{

 /**
  * Creates a new User
  *
  * @param array $user
  * @return void
  */
 public function create(array $user);

}