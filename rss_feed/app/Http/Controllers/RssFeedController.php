<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class RssFeedController extends Controller
{
    public function index()
    {
        $response = Http::get('https://timesofindia.indiatimes.com/rssfeeds/-2128838597.cms?feedtype=json');
        $data = $response->json();

        $items = $data['channel']['item'];

        // dd(Arr::get($items,'0.description'));        

        return view('welcome', ['channel' => $items]);
    }
}