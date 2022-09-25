<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

use App\Models\Listing;

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
// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);

// Single Listings
Route::get('/listings/{listing}', [ListingController::class, 'show']);



/*     $listing = Listing::find($id);
    if ($listing) {
       return view('listing', [
        'listing' => $listing
    ]); 
    } else {
        abort('404');
    } */