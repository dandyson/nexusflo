<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return response()->json([
                'type' => 'success',
                'message' => 'Login Successful',
            ]);
        }
  
        abort(500, 'Error - Credentials incorrect, please try again');
    }

    public function register(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();

        DB::transaction(function () use ($data) {
            User::factory()->create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        });
         
        return response()->json([
            'type' => 'success',
            'message' => 'New User Created Successfully',
        ]);
    }

    public function logOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
