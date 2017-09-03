<?php

namespace App\Account\Services\Auth;

use Auth;
use Illuminate\Http\Request;
use Validator;

trait ValidateUser
{

    /**
     * Sends validation failed messages
     *
     * @param Request $request
     * @param array $rules
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendValidationResponse(Request $request, $rules = [])
    {

        return response()->json([
            'errors' => $this->validateLogin($request, $rules)->messages()
        ]);
    }

    /**
     * Validates $credentials
     *
     * @param Request $request
     * @param array $rules
     * @return $validation
     */
    public function validateLogin(Request $request, $rules = [])
    {
        $validation = Validator::make($request->all(), $rules);

        return $validation;
    }

    /**
     * Checks validation status
     *
     * @param Request $request
     * @param array $rules
     * @return bool
     */
    public function validationFails(Request $request, $rules = [])
    {
        return $this->validateLogin($request, $rules)->fails();
    }


}
