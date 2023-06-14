<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\admin\profileController;
use App\Http\Controllers\admin\contactController;
use App\Http\Controllers\admin\artistController;
use App\Http\Controllers\artist\serviceController;

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

Route::controller(frontendController::class)->group(function (){
    Route::get('/', 'index')->name('index');
    Route::get('wishlist', 'wishlist')->name('wishlist');
    Route::get('contact-us', 'contactus')->name('contact');
    Route::post('contact/submit', 'contactfill')->name('contactfill');
    Route::get('artist/{type?}', 'artistlist')->name('artistlist');
    Route::get('artist/detail/{id}', 'artistdetail')->name('artistdetail');
    Route::get('services', 'services')->name('services');
});

Auth::routes(['verify' => false]);

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

    /*------ All Authenticated Users Routes List ------*/

    Route::middleware(['auth'])->group(function () {
        Route::controller(profileController::class)->group(function (){
            Route::group(['prefix' => 'settings'], function () {
                Route::get('/', 'index')->name('profilepage');
                Route::post('/dp', 'profilepic')->name('profilepic');
                Route::post('/about', 'about')->name('about');
                Route::post('/name', 'username')->name('username');
                Route::post('/password', 'password')->name('password');
                Route::get('/address/{id?}', 'address')->name('address');
                Route::post('/address/add', 'addAddress')->name('addAddress');
                Route::post('/address/update/{id}', 'updateAddress')->name('updateAddress');
                Route::get('/address/destroy/{id}', 'destroyAddress')->name('admin.destroyAddress');
                Route::post('/state', 'getState')->name('getState');
                Route::post('/city', 'getCity')->name('getCity');
            });
        });
    });

    /*------ All Normal Users Routes List ------*/
    Route::middleware(['auth', 'user-access:user'])->group(function () {
        Route::get('/user', [HomeController::class, 'index'])->name('home');
    });
  
    /*------- All Admin Routes List -----------*/
    Route::middleware(['auth', 'user-access:admin'])->group(function () {

        Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home');
        Route::get('/contact', [contactController::class, 'contact'])->name('admin.contact');
        Route::get('/artist/list', [artistController::class, 'artist'])->name('admin.artist');
        Route::get('/artist/data/{id}', [artistController::class, 'artistdata'])->name('admin.artistdata');
        Route::get('/artist/{id?}', [artistController::class, 'editartist'])->name('admin.editartist');
        Route::get('/edit/basic/{id}', [artistController::class, 'basicdetail'])->name('admin.basicdetail');
        Route::get('/edit/dp/{id}', [artistController::class, 'userdp'])->name('admin.dp');
        Route::get('/edit/password/{id}', [artistController::class, 'userpwd'])->name('admin.userpwd');
        Route::get('/edit/verify/{id}', [artistController::class, 'verifyuser'])->name('admin.verifyuser');

    });
  
    /*-------- All Artist Routes List ----------*/
    Route::middleware(['auth', 'user-access:artist'])->group(function () {
        Route::get('/artists', [HomeController::class, 'artistHome'])->name('artist.home');
        Route::get('/service', [serviceController::class, 'artistservice'])->name('artist.service');
        Route::get('/services/{id?}', [serviceController::class, 'newservices'])->name('artist.newservices');
        Route::post('/services/add', [serviceController::class, 'addservices'])->name('artist.addservices');
        Route::post('/services/edit/{id?}', [serviceController::class, 'editservice'])->name('artist.editservice');
        Route::get('/service/details/{id}', [serviceController::class, 'servcicedetails'])->name('artist.servcicedetails');
        Route::get('/services/delete/{id}', [serviceController::class, 'destroyservice'])->name('artist.destroyservice');
        Route::get('/packages/service', [serviceController::class, 'packages'])->name('artist.packages');
        Route::get('/packages/{id?}', [serviceController::class, 'servicepackages'])->name('artist.servicepackages');
        Route::post('/packages/add', [serviceController::class, 'addpackages'])->name('artist.addpackages');
        Route::post('/packages/edit/{id?}', [serviceController::class, 'editpackages'])->name('artist.editpackages');
        Route::get('/package/detail/{id}', [serviceController::class, 'packagedetail'])->name('artist.packagedetail');
        Route::get('/package/delete/{id}' , [serviceController::class, 'destroypackages'])->name('artist.destroypackages');

            });
});

