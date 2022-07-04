<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    //
    public function admin(Request $request){
        return view('admin');
    }
 
    //"https://api.nomics.com/v1/currencies/ticker?key=c9d76bd6ce39fa709e6e68709b9812eaef999a3a&ids=BTC,ETH,XRP&interval=1d,30d&convert=EUR&platform-currency=ETH&per-page=100&page=1"

     //"https://api.nomics.com/v1/currencies/ticker?key=c9d76bd6ce39fa709e6e68709b9812eaef999a3a

}
