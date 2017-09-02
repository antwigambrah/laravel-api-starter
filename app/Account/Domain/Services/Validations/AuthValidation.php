<?php

namespace App\Account\Domain\Services\Validations;

use Validator;


/**
 * Trait AuthValidation
 * @package App\Account\Domain\Services\Validations
 */
trait AuthValidation
{

    protected $messages = [];

    /**
     * Validate user credentials
     * @param array $credentials
     * @param array $rules
     * @param array $messages
     * @return $validation
     */
    public function validateUser(array $credentials, array $rules)
    {

        $validation = Validator::make($credentials, $rules);

        if ($validation->fails()) {

            return $validation->messages();
        }

    }


    public function validateMessages()
    {
        return $this->messages;
    }


}