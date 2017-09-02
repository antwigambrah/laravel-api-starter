<?php

namespace App\Account\Domain\Services\Auth;

use App\Account\Controllers\Auth\ValidateUser;
use App\Account\Domain\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Validator;

class RegisterService implements Responsable
{

    /**
     * Validation Trait
     */
    use ValidateUser;

    /**
     *User registration validation rules
     *
     * @var array
     */
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'mobile_no' => 'required'
    ];

    /**
     * The User repository
     * @var string
     */
    protected $repository;


    /**
     * Creates a new register service instance
     *
     * @param UserRepositoryInterface $repository
     * @param Request $request
     */
    public function __construct(UserRepositoryInterface $repository, Request $request)
    {
        $this->repository = $repository;
    }


    /**
     * Registers a new user
     *
     * @param array $user
     * @return $user
     */
    public function registernewUser($user = [])
    {
        return $this->repository->create($user);
    }


    /**
     * Sends user registration details response
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendRegisterUserResponse(Request $request)
    {

        return response()->json([

            'user' => $this->registernewUser($request->all())

        ]);

    }


    /**
     * Sends register service response
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function toResponse($request)
    {

        return $this->validationFails($request, $this->rules)
            ? $this->sendValidationResponse($request, $this->rules)
            : $this->sendRegisterUserResponse($request);


    }


}
