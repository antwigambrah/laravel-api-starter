<?php

namespace App\Account\Domain\Services;


use Illuminate\Http\Resources\Json\Resource;

class UserService extends Resource
{

    public function toResponse($request)
    {
        return response()->json([
            'all' => $request->all()
        ]);
    }


}
