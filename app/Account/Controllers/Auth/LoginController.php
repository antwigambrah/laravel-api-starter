<?php 
namespace App\Account\Controllers\Auth;

use App\Account\Controllers\Auth\Requests\LoginRequest;
use App\Account\Domain\Services\Auth\LoginService;
use Auth;
use Illuminate\Http\Request;
use Validator;


class LoginController
{


    public function login(Request $request)
    {
        return new LoginService($request);
    }


}
