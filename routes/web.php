<?php

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

Route::get('/indexi', function () {

    return "Hello world";
})->name('root');

Auth::routes();
Route::get('profile', 'UserController@profile')->name('profile');
Route::post('uploadAvatar', 'UserController@uploadAvatar')->name('uploadAvatar');


// Client site
Route::get('/', 'ClientController@index')->name('client.root');
Route::get('/gallery', 'ClientController@gallery')->name('client.gallery');
Route::get('/aboutUs', 'ClientController@aboutUs')->name('client.aboutUs');
Route::get('/services', 'ClientController@services')->name('client.services');
Route::get('/CustomerFeedback', 'FeetbackController@ratting')->name('client.customerfeedback');
Route::get('/Contact', 'ContactController@index')->name('client.contact');
Route::post('/Contact/sendEmail', 'ContactController@sendEmail')->name('sendEmail');
//Route::get('/sendEmail', 'ContactController@sendEmail')->name('sendEmail');
// -----------------------------

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/insert', 'GalleryController@getInsert')->name('inserted');
Route::post('/insert', 'GalleryController@getInsert')->name('insert');
Route::get('/show', 'GalleryController@show')->name('show');

Route::post('/insertPost', 'GalleryController@postInsert')->name('posted');

Route::prefix('admin')->group(function (){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//    Route::get('/', 'AdminController@index')->name('admin.root');
    Route::get('/dashboard', 'AdminController@index')->name('admin.root');



//    Edit pages
    Route::get('/dashboard/Gallery', 'AdminController@gallery')->name('admin.gallery');
    Route::post('/dashboard/createGallery', 'GalleryController@createGallery')->name('admin.createGallery');

    Route::post('/dashboard/createSlider', 'SlideController@createSlide')->name('admin.createSlide');

    Route::get('/dashboard/Gallery/{id}','GalleryController@delete');
    Route::get('/dashboard/Slide/{id}','SlideController@delete')->name('deleteSlide.Image');




    Route::get('/dashboard/Services', 'AdminController@services')->name('admin.services');
    Route::get('/dashboard/Home', 'AdminController@home')->name('admin.home');
    Route::get('/dashboard/Contact', 'AdminController@contact')->name('admin.contact');
    Route::get('/dashboard/AboutUs', 'AdminController@aboutUs')->name('admin.aboutUs');
    Route::get('/dashboard/CustomerFeetback', 'AdminController@customerFeetback')->name('admin.customerFeetback');
});


// Feetback
Route::post('/createFeetback', 'FeetbackController@create')->name('create.feetback');



// People
Route::prefix('people')->group(function () {
    include 'People/PeopleRoutes.php';
});
