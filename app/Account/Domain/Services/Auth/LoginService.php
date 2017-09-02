<?php

namespace App\Account\Domain\Services\Auth;

use App\Account\Controllers\Auth\AuthenticateUser;
use Auth;
use Illuminate\Contracts\Support\Responsable;
use Validator;

class LoginService implements Responsable
{

    use AuthenticateUser;


//    protected $credentials;
//
//    public function __construct($credentials = [])
//    {
//        $this->credentials = $credentials;
//
//    }


    public function toResponse($request)
    {
        return $this->validateLogin($request)->fails() ? response()->json([
            'errors' => $this->validateLogin($request)->messages()
        ]) : $this->sendLoginResponse($request);

    }


}
