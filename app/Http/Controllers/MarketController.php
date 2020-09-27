<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class MarketController extends Controller
{

    public function index()
    {
        $markets = Market::all();

        return view('markets.index', [
            'markets' => $markets
        ]);
    }

    public function show($param)
    {
        $market = Market::where('id', $param)
            ->orWhere('slug', $param)
            ->firstOrFail();
        
        $products = $market->products;

        return view('markets.show', [
            'market' => $market,
            'products' => $products
        ]);
    }
}
