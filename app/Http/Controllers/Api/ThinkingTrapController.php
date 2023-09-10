<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ThinkingTrapController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json('Hello!!! Thinking traps working');
    }
}
