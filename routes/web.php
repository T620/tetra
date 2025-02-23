<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MarketController;
use App\Models\Market;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/markets', [MarketController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/markets/{market}', [MarketController::class, 'show']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $user = Auth::user();

    return view('dashboard.index', [
        'title' => 'Dashboard',
        'header' => 'Your Dashboard',
        'dashboardHeader' => Helpers::getTimeOfDayString($user->name),
        'currentUser' => $user,
        'favouriteMarket' => Market::first(),
        'navItems' => Helpers::getDashboardLinks($user->name),
        'currentNavItem' => 'dashboard'
    ]);

})->name('dashboard');