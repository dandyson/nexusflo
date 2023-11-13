<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class QuoteController extends Controller
{
    public function index()
    {
        // Read the JSON file
        $jsonData = file_get_contents(base_path('resources/json/quotes.json'));

        // Decode the JSON data into a PHP array
        $quotes = json_decode($jsonData, true);

        return response()->json($quotes);
    }
}
