<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return 'hello';
    }

    public function register(Request $request)
    {
        $user = User::factory()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }
}
