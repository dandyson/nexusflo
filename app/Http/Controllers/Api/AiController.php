<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class AiController extends Controller
{
    public function fetchWorryBalanceResponse(Request $request): JsonResponse
    {
        $userWorry = $request->input('text');
        $prompt = 'respond with the following context: Please respond in a way that ‘balances’ a worry. Provide a balanced perspective on the concerns.';
        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'max_tokens' => 150,
            'temperature' => 0.7,
            'messages' => [
                ['role' => 'user', 'content' => $userWorry . ' - ' . $prompt],
            ],
        ]);

        return response()->json([
            'reply' => $result->choices[0]->message->content,
        ]);
    }
}
