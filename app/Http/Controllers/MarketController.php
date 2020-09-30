<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarketController extends Controller
{

    // could maybe use the model name instead?
    CONST RESOURCE_NAME = 'Markets';
    
    /**
     * @note normally I'd use function() : returnType, but Laravel threw a total BF
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory
    */
    public function index()
    {
        $user = Auth::user();

        return view('dashboard.markets', [
            'title' => 'Markets',
            'header' => "Markets you're watching",
            'currentUser' => Auth::user(),
            'markets' => Market::all(),
            'navItems' => \Helpers::getDashboardLinks($user->name),
            'currentNavItem' => $this::RESOURCE_NAME
        ]);
    }

    /**
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory
    */
    public function show($param)
    {
        $user = Auth::user();

        $market = Market::where('id', $param)
            ->orWhere('slug', $param)
            ->firstOrFail();

        return view('dashboard.market', [
            'title' => $market->name,
            'header' => "Products sold by {$market->name} today",
            'currentUser' => Auth::user(),
            'market' => $market,
            'products' => $market->products,
            'navItems' => \Helpers::getDashboardLinks($user->name),
            'currentNavItem' => $this::RESOURCE_NAME
        ]);
    }
}
