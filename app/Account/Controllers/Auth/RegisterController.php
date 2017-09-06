<?php 
namespace App\Account\Controllers\Auth;

use App\Account\Domain\Repositories\Contracts\AccountRepositoryInterface;
use App\Account\Services\Auth\RegisterService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;


class RegisterController extends Controller
{
    /**
     * User Account repository
     *
     * @var string
     */
    protected $account;


    /**
     * Creates a new Register Controller instance
     *
     * RegisterController constructor.
     * @param AccountRepositoryInterface $repository
     */
    public function __construct(AccountRepositoryInterface $account)
    {
        $this->account=$account;


    }


    /**
     * Register a new user
     *
     * @param Request $request
     * @return RegisterService
     */
    public function register(Request $request)
    {
        return new RegisterService($this->account,$request);

    }

}

