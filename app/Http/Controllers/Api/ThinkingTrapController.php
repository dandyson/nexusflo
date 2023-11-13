<?php

namespace App\Http\Controllers\Api;

use App\Models\ThinkingTraps;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ThinkingTrapController extends Controller
{
  public function index(): JsonResponse
  {
    $thinkingTraps = ThinkingTraps::all()->makeHidden(['created_at', 'updated_at']);

    return response()->json([
      'thinkingTraps' => $thinkingTraps,
    ]);
  }
}
