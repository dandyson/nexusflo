<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Goutte\Client;

class PositiveNewsController extends Controller
{
   
    public function index()
    {
        return view('positive-news');
    }

    public function newsFetch() 
    {
        $client = new Client();
        // URLs
        $positiveNewsUrl = 'https://www.positive.news/';
        $goodNewsNetworkUrl = 'https://www.goodnewsnetwork.org/category/news/';

        // Requests
        $positiveNews = $client->request("GET", $positiveNewsUrl);
        $goodNewsNetwork = $client->request("GET", $goodNewsNetworkUrl);

        // Data
        $jsonData['positive-news'] = $positiveNews->filter('.latest__articles > div')->each(function ($node) {
            $this->positiveNewsResults['link'] = $node->filter('.card__image__link')->getNode(0)->getAttribute('href');
            $this->positiveNewsResults['image'] = $node->filter('.card__image')->getNode(0)->getAttribute('src');
            $this->positiveNewsResults['title'] = $node->filter('.card__title')->text();
            $this->positiveNewsResults['description'] = strlen($node->filter('.card__text')->text()) > 75 ? substr($node->filter('.card__text')->text(), 0, 75) . "..." : $node->filter('.card__text')->text();
            return $this->positiveNewsResults;
        });

        $jsonData['good-news-network'] = $goodNewsNetwork->filter('.td-block-row > .td-block-span6')->each(function ($node) {
            $this->goodNewsNetworkResults['link'] = $node->filter('.td-module-thumb > a')->getNode(0)->getAttribute('href');
            $this->goodNewsNetworkResults['image'] = $node->filter('.td-module-thumb > a > img')->getNode(0)->getAttribute('src');
            $this->goodNewsNetworkResults['title'] = $node->filter('.td_module_3 > h3')->text();
            return $this->goodNewsNetworkResults;
        });

        return response()->json(['data' => $jsonData]);
    }
}
