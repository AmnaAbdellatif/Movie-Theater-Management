<?php

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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


Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
/*Route::get('/dashboard', function () {
    return view('Back.dashboard');
});
Route::post('/dashboard', function () {
    return view('Back.dashboard');
});*/

Route::post('/login', "Auth\LoginController@do")->name('login');


Route::post('/register', 'Auth\RegisterController@create')->name('register');


Route::get('/showUsers', 'UsersController@allUsers')->name('allUsers');
Route::post('/showUsers', 'UsersController@allUsers')->name('allUsers');

Route::resource('User', 'UsersController');
Auth::routes(['register' => false]);






Route::group(['namespace' => 'Front'],function () {
    Route::get('/home', "HomeController@home");
    Route::get('/videos', "HomeController@videos");
    Route::get('/reviews', "HomeController@reviews");
    Route::get('/contact', "HomeController@contact");
    Route::get('/about-us', "HomeController@aboutus");
    Route::get('/avant-toi', "HomeController@avanttoi");
    Route::get('/Showdates', "HomeController@showdates");
    Route::get('/reservation', "HomeController@Reservation");
    Route::get('/confirmReservation', "HomeController@FormReservation");
//   Route::get('/addReservation', 'ReservationController@create')-> name('addReservation');
    Route::post('/addReservation', 'ReservationController@store')-> name('addReservation');
    Route::get('/addReservation', 'ReservationController@store')-> name('addReservation');
    Route::get('/Showdates', 'ProjectionController@allprojections')->name('Showdates');
    Route::post('/Showdates', 'ProjectionController@allprojections')->name('Showdates');


});

Route::group(['namespace' => 'Back'],function () {

    Route::get('/admin', "AdminController@index");

    Route::get('/showFilms', 'FilmController@allFilms')->name('allFilms');
    Route::post('/showFilms', 'FilmController@allFilms')->name('allFilms');
    Route::get('/addFilm', 'FilmController@create')-> name('addFilm');
    Route::post('/addFilm', 'FilmController@addFilm')-> name('addFilm');
    Route::post('/deleteFilm/{id}', 'FilmController@deleteFilm')-> name('deleteFilm');
    Route::get('/deleteFilm/{id}', 'FilmController@deleteFilm')-> name('deleteFilm');
    Route::get('/showUsers', 'UsersController@allUsers')->name('allUsers');
    Route::post('/showUsers', 'UsersController@allUsers')->name('allUsers');
    Route::post('/deleteUser/{id}', 'UsersController@deleteUser')->name('deleteUser');
    Route::get('/deleteUser/{id}', 'UsersController@deleteUser')->name('deleteUser');
    //Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::get('/addUser', 'UsersController@create')->name('addUser');
    Route::post('/addUser', 'UsersController@addUser')->name('addUser');
    Route::get('/editFilm/{film}', 'FilmController@editFilm')->name('editFilm');
    Route::get('/updateFilm/{id}', 'FilmController@updateFilm')->name('updateFilm');
    Route::get('/editUser/{user}', 'UsersController@editUser')->name('editUser');
    Route::get('/updateUser/{id}', 'UsersController@updateUser')->name('updateUser');
    Route::get('/logout' , [ 'as' => 'logout', 'uses' => 'UsersController@logoutUser']);
    Route::get('/showReservation', 'reservaController@allReservations')->name('allReservations');
    Route::post('/showReservation', 'reservaController@allReservations')->name('allReservations');
    ;

});
