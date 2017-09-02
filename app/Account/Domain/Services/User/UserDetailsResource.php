<?php

namespace App\Account\Domain\Services\User;

use Illuminate\Http\Resources\Json\Resource;

class UserDetailsResource extends Resource
{
    /**
     * Transform the authenticated user details into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

        ];
    }
}
