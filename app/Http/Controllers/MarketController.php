<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarketController extends Controller
{

    public function index()
    {
        return view('dashboard.markets', [
            'title' => 'Markets',
            'header' => "Markets you're watching",
            'currentUser' => Auth::user(),
            'markets' => Market::all()
        ]);

    }

    public function show($param)
    {
        $market = Market::where('id', $param)
            ->orWhere('slug', $param)
            ->firstOrFail();

        return view('dashboard.market', [
            'title' => $market->name,
            'header' => "Products sold by {$market->name} today",
            'currentUser' => Auth::user(),
            'market' => $market,
            'products' => $market->products
        ]);
    }
}
