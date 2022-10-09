<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



//Login
Route::post('authenticate',[\App\Http\Controllers\Api\v1\PassportAuthController::class,'login']);

Route::middleware('auth:api')->prefix('/v1')->group(function(){

    //Companies
    Route::resource('companies',\App\Http\Controllers\Api\v1\CompanyController::class);
    //Location Categories
    Route::resource('location-categories',\App\Http\Controllers\Api\v1\LocationCategoryController::class);
    //Locations
    Route::resource('locations',\App\Http\Controllers\Api\v1\LocationController::class);
    //Product
    Route::resource('products',\App\Http\Controllers\Api\v1\ProductController::class);
    //Price Level
    Route::resource('price-levels',\App\Http\Controllers\Api\v1\PriceLevelController::class);
    //Prices
    Route::resource('prices',\App\Http\Controllers\Api\v1\PriceController::class);
    //Unit controller
    Route::resource('units',\App\Http\Controllers\Api\v1\UnitController::class);
    //Inventories
    Route::resource('inventories',\App\Http\Controllers\Api\v1\InventoryController::class);
    //User locations
    Route::get('user/locations',[\App\Http\Controllers\Api\v1\UserLocation::class,'index']);
    //Search for customer
    Route::get('customer/search',[\App\Http\Controllers\Api\v1\CustomerController::class,'search']);
    //Attributes
    Route::resource('attribute',\App\Http\Controllers\Api\v1\AttributeController::class);
    //Terms
    Route::resource('term',\App\Http\Controllers\Api\v1\TermController::class);

});

