<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['password'] = \Hash::make($data['password']);
        User::firstOrCreate([
            'email' => $data['email']
        ], $data);
        return response([]);
    }
}
