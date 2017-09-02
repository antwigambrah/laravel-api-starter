<?php 
namespace App\Account\Controllers\Auth;

use App\Account\Domain\Repositories\Contracts\UserRepositoryInterface;
use App\Account\Domain\Services\Auth\RegisterService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;


class RegisterController extends Controller
{

    /**
     * User repository
     *
     * @var string
     */
    protected $repository;


    /**
     * Creates a new Register Controller instance
     *
     * RegisterController constructor.
     * @param UserRepositoryInterface $repository
     */
    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    /**
     * Register a new user
     *
     * @param Request $request
     * @return RegisterService
     */
    public function register(Request $request)
    {
        return new RegisterService($this->repository, $request);

    }

}

