<?php


namespace App\Account\Domain\Repositories;
use App\Account\Domain\Repositories\Contracts\AccountRepositoryInterface;
use App\Account\Domain\Models\Account;
use Hash;

class AccountRepository implements AccountRepositoryInterface
{


    /**
     * Create a new user account
     *
     * @param array $user
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(array $user)
    {
        $account=Account::create([
            'account_type'=>$user['account_type']
        ]);

        return $account->users()->create([
           'name'=>$user['name'],
           'email'=>$user['email'],
           'password'=>$user['password'],
           'mobile_no'=>$user['mobile_no']
        ]);
    }
}