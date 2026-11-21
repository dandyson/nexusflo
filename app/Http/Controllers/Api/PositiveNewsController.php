<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;
use RuntimeException;
use Symfony\Component\DomCrawler\Crawler;
use Throwable;

class PositiveNewsController extends Controller
{
    private const GOOD_NEWS_NETWORK_URL = 'https://www.goodnewsnetwork.org/category/news/';

    public function index()
    {
        return view('positive-news');
    }

    /**
     * Fetch the latest stories from each news source.
     *
     * A failing source never fails the whole request: its entry in "data" is
     * an empty array and its key is listed in "errors" so the client can show
     * a message for just that source.
     */
    public function newsFetch(): JsonResponse
    {
        $sources = [
            'good-news-network' => fn () => $this->fetchGoodNewsNetwork(),
        ];

        $data = [];
        $errors = [];

        foreach ($sources as $key => $fetch) {
            try {
                $data[$key] = $fetch();
            } catch (Throwable $e) {
                Log::warning("News fetch failed for [{$key}]: {$e->getMessage()}");

                $data[$key] = [];
                $errors[] = $key;
            }
        }

        return response()->json([
            'data' => $data,
            'errors' => $errors,
        ], 200, [], JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_SUBSTITUTE);
    }

    private function fetchGoodNewsNetwork(): array
    {
        $html = Http::timeout(10)->get(self::GOOD_NEWS_NETWORK_URL)->throw()->body();

        $items = (new Crawler($html))
            ->filter('.td-block-row > .td-block-span6')
            ->each(function (Crawler $node) {
                try {
                    return [
                        'link' => $node->filter('.td-module-thumb > a')->attr('href'),
                        'image' => $node->filter('.td-module-thumb > a > img')->attr('src'),
                        'title' => $node->filter('.td_module_3 > h3')->text(),
                    ];
                } catch (InvalidArgumentException) {
                    // A story card with missing parts is skipped, not fatal.
                    return null;
                }
            });

        $items = array_values(array_filter($items));

        if ($items === []) {
            throw new RuntimeException('No stories found; the page layout may have changed.');
        }

        return $items;
    }
}
