<?php

namespace App\Account\Controllers;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');

    }


    /**
     * Retrieves authenticated user account
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserAccount()
    {

    }

}
