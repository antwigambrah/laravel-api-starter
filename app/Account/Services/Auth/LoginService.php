<?php
namespace App\Account\Services\Auth;

use App\Account\Services\Auth\ValidateUser;
use Auth;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Validator;

class LoginService implements Responsable
{

    use ValidateUser;

    /**
     * User Login validation rules
     *
     * @var array
     */
    public $rules = [
        'email' => 'required',
        'password' => 'required'
    ];


    /**
     * Attempt to Login user
     *
     * @param Request $request
     * @return bool
     */
    public function attemptLogin(Request $request)
    {
        return Auth::attempt($request->all());
    }

    /**
     * Send failed login response
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function sendAttemptLoginResponse()
    {
        return response('unauthenticated', 401);
    }

    /**
     * Generates a new token for authentitcated User
     *
     * @return token
     */
    public function generateToken()
    {
        return Auth::user()->createToken(Auth::user()->email)->accessToken;
    }

    /**
     * Sends genenated token response
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendgenerateTokenResponse()
    {
        return response()->json([
            'access_token' => $this->generateToken()
        ]);
    }

    /**
     * Sends login response
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function sendLoginResponse(Request $request)
    {
        return !$this->attemptLogin($request)
            ? $this->sendAttemptLoginResponse()
            : $this->sendgenerateTokenResponse();

    }


    /**
     * Sends login service response
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function toResponse($request)
    {

        return $this->validationFails($request, $this->rules)
            ? $this->sendValidationResponse($request, $this->rules)
            : $this->sendLoginResponse($request);

    }


}
