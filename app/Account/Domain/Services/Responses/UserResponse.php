<?php
use Illuminate\Contracts\Support\Responsable;

namespace App\Account\Domain\Services\Responses;

class UserResponse implements Responsable
{
 public $users;

 public function __construct($users)
 {
  $this->users = $users;
 }

 public function toResponse()
 {

  return $users;
 }
}