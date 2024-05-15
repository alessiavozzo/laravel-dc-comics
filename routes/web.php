<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;
use App\Models\Comic;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $comics = Comic::orderByDesc('id')->paginate(12);
    $banner_links = config("links.banner_links");
    $footer_links = config("links.footer_links");
    $icons = config("links.social_icons");
    $data = [
        "comics" => $comics,
        "banner_links" => $banner_links,
        "footer_links" => $footer_links,
        "icons" => $icons
    ];
    return view('home', $data);
})->name('home');

Route::resource('/comics', ComicController::class);