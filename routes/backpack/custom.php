<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('product', 'ProductCrudController');
    Route::crud('product-meta', 'ProductMetaCrudController');
    Route::crud('prices', 'PricesCrudController');
    Route::crud('price-level', 'PriceLevelCrudController');
    Route::crud('company', 'CompanyCrudController');
    Route::crud('location-category', 'LocationCategoryCrudController');
    Route::crud('location', 'LocationCrudController');
    Route::crud('inventory', 'InventoryCrudController');
    Route::crud('unit', 'UnitCrudController');
    Route::crud('cash-register', 'CashRegisterCrudController');
    Route::crud('customer', 'CustomerCrudController');
    Route::crud('attribute', 'AttributeCrudController');
    Route::crud('term', 'TermCrudController');
}); // this should be the absolute last line of this file