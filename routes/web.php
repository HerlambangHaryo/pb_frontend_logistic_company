<?php

use Illuminate\Support\Facades\Route;

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
    
    //-----------------------------------------------------------
        Route::get('/', function () {
            return redirect()->route('Home.index');
        });

        Route::resource('Home', HomeController::class);
        
        Route::resource('Trackings', TrackingsController::class);
        Route::resource('Profiles', ProfilesController::class);

	        Route::get('Orders/{Order}/deletedata', 'OrdersController@deletedata')
	            ->name('Orders.deletedata');
                Route::put('Orders/{Order}/finalstore', 'OrdersController@finalstore')
                    ->name('Orders.finalstore');
        Route::resource('Orders', OrdersController::class); 

            Route::get('Detailorders/{Detailorder}/deletedata', 'DetailordersController@deletedata')
                ->name('Detailorders.deletedata');
            Route::get('Detailorders/{Detailorder}/createdata', 'DetailordersController@createdata')
                ->name('Detailorders.createdata');
        Route::resource('Detailorders', DetailordersController::class); 
         
        
Route::group(['middleware' => ['auth']], function() { 
   Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
