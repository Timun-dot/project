<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CryptoController extends Controller
{
    //
    public function index(Request $request){
        return view('index');
    }
    public function getData(Request $request){
        $response = Http::get("https://api.nomics.com/v1/currencies/ticker?key=c9d76bd6ce39fa709e6e68709b9812eaef999a3a&per-page=100&page=1&convert=MYR");    
        return view('cdashboard', ['response' => $response -> json()]);
    }

    public function admin(Request $request){
        return view('layouts.auth');
    }


    public function about(Request $request){
        return view('about');
    }
    
    public function info(Request $request){
        return view('info');
    }

 
    //"https://api.nomics.com/v1/currencies/ticker?key=c9d76bd6ce39fa709e6e68709b9812eaef999a3a&ids=BTC,ETH,XRP&interval=1d,30d&convert=EUR&platform-currency=ETH&per-page=100&page=1"

     //"https://api.nomics.com/v1/currencies/ticker?key=c9d76bd6ce39fa709e6e68709b9812eaef999a3a

}
