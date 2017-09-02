<?php

namespace App\Account\Domain\Services\Auth;

use Validator;

trait AuthResponse
{
    function validateResponse($rules)
    {
        return response($rules);
    }

    public function authenticateResponse()
    {
        return !$this->authenticateUser() ?: response('unauthenticated', 401);
    }

    public function tokenResponse()
    {
        return response()->json([
            'access_token' => $this->generateToken()
        ]);
    }
}