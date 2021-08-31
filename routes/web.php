<?php

use App\Mail\AdminConfirmMail;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'Frontend\WebController@index')->name('index');
Route::resource('muslimmatrimony','Frontend\RegistrationMuslimMatrimonyController');




Route::group(['as'=>'admin.', 'prefix'=>'admin', 'namespace'=>'Admin','middleware'=>['auth','admin']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('looking','RegCategory\LookingForController');
    Route::resource('preferencecountry','RegCategory\PreferenceCountryController');
    Route::resource('regforwho','RegCategory\RegForWhoController');
    Route::resource('state','RegCategory\StateController');
    Route::resource('citizenship','RegCategory\CitizenshipController');
    Route::resource('maritalstatus','RegCategory\MaritalStatusController');
    Route::resource('registration','RegistrationController');
});


Route::group(['as'=>'author.', 'prefix'=>'author', 'namespace'=>'Author','middleware'=>['auth','author']], function(){
    Route::get('dashboard','AuthorDashboardController@index')->name('dashboard');
});







