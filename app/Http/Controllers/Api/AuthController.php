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
        $this->logout();
        
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if (Auth::attempt($credentials, true) && $user) {
            Auth::loginUsingId($user->id);

            return response()->json([
                'type' => 'success',
                'message' => 'Login Successful',
                'user' => Auth::user(),
            ]);
        }
  
        abort(500, 'These credentials do not match our records, please try again.');
    }

    public function register(Request $request): JsonResponse
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();

        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Auth::loginUsingId($user->id);

        return response()->json([
            'type' => 'success',
            'message' => 'New User Created Successfully',
            'user' => Auth::user(),
        ]);
    }

    public function logOut() {
        Session::flush();
        Auth::logout();
  
        return response()->json([
            'type' => 'success',
            'message' => 'Logout Successful',
        ]);
    }
}
