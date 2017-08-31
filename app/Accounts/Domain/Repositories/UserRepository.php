<?php
namespace App\Account\Domain\Repositories;

use App\Account\Domain\Repositories\Contracts\UserRepositoryInterface;
use App\Account\Domain\Models\User;
use Hash;

class UserRepository implements UserRepositoryInterface
{


 /**
  *Create new user
  *
  * @param array $user
  * @return $user
  */
 public function create(array $user)
 {

  $user = User::create([
   'name' => $user['name'],
   'email' => $user['email'],
   'password' => Hash::make($user['password']),
   'mobile_no' => $user['mobile_no']
  ]);

  $user->update([
   'account_id' => $user->id
  ]);

  return $user;
 }

}
