<?php
namespace App\Account\Services\Auth;

use App\Account\Services\Auth\ValidateUser;
use App\Account\Domain\Repositories\Contracts\AccountRepositoryInterface;
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
        'mobile_no' => 'required',
        'account_type'
    ];

    /**
     * The User repository
     * @var string
     */
    protected $repository;


    /**
     * Creates a new register service instance
     *
     * @param AccountRepositoryInterface  $repository
     * @param Request $request
     */
    public function __construct(AccountRepositoryInterface $repository, Request $request)
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


        return !$this->registernewUser($request->all()) ? : response()->json([

            'status' => '200',
            'message' => 'Account succesfully created'

        ], 200);

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
