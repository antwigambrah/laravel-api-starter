<?php 
namespace App\Account\Controllers\Auth;
use App\Account\Domain\Services\Auth\LoginService;
use Auth;
use Illuminate\Http\Request;
use Validator;


class LoginController
{


    /**
     * Login User
     *
     * @param Request $request
     * @return LoginService
     */
    public function login(Request $request)
    {
        return new LoginService($request);
    }


}
