<?php

namespace App\Account\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{

    protected  $fillable=['account_type','is_active'];

    public  function users()
    {
        return $this->hasMany('App\Account\Domain\Models\User');

    }
}
