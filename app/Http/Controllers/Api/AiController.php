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
        if ($request->standaloneWorryBalancer) {
            $prompt .= ' Please also only respond in a HTML format.';
        }
        $result = OpenAI::chat()->create([
            'model' => 'gpt-4o',
            'max_tokens' => 1000,
            'temperature' => 0.7,
            'messages' => [
                ['role' => 'user', 'content' => $userWorry . ' - ' . $prompt],
            ],
        ]);

        return response()->json([
            'choices' => $result,
            'reply' => $result->choices[0]->message->content,
        ]);
    }
}
