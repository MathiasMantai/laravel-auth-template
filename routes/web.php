<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


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

Route::get('/', function() {

    if(Auth::check())
    {
        return redirect(route('dashboard'));
    }

    return view('welcome');
})->name('home');

Route::get('/home/{provider}', 
    'App\Http\Controllers\ProviderController@getProvider'
);

Route::get(
    '/dashboard',
    'App\Http\Controllers\DashboardController@userData'
)->name('dashboard')->middleware('auth');


/* Authentication START */

Route::get('/register', function() {
    if(Auth::check())
    {
        return redirect(route('dashboard'));
    }

    return view('auth/register');
})->name('register');

Route::post(
    '/registerUser', 
    'App\Http\Controllers\RegisterController@register'
);

Route::get('/login', function() {

    if(Auth::check())
    {
        return redirect(route('dashboard'));
    }

    return view('auth/login');
})->name('login');

Route::post(
    '/authenticate', 
    'App\Http\Controllers\LoginController@authenticate'
);

Route::get(
    '/logout', 
    'App\Http\Controllers\LoginController@logout'
)->name('logout')->middleware('auth');

//profile page
Route::get(
    '/profile',
    'App\Http\Controllers\DashboardController@userData'
)->name('profile')->middleware('auth');

//update name or email on profile page
Route::post(
    '/updateProfile',
    'App\Http\Controllers\ProfileController@updateProfile'
)->name('updateProfile')->middleware('auth');


//change pasword on profile page
Route::post(
    '/changePassword',
    'App\Http\Controllers\PasswordChangeController@updatePassword'
)->name('changePassword')->middleware('auth');


// Provider auth
Route::get('/auth/redirect/{provider}', 'App\Http\Controllers\ProviderController@redirect')->name('authredirect');
Route::get('/auth/callback/{provider}', 'App\Http\Controllers\ProviderController@callback');


/* Authentication END */