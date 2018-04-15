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

// Route::get('/', function () {
//     return view('welcome');
// });

// See page 42
Route::resource('tasks', 'TasksController');

Route::get('/',  'WelcomeController@index');

Route::get('users/{id}/friends/{name?}', 'FriendsController@show')->where(['id' => '[0-9]+'])->name('friends.show');

// Using middleware
/*
Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', 'DashboardController@index');
    Route::get('account', function() {
        return view('account');
    });
});
*/

// Route prefixing using a group
Route::group(['prefix' => 'api'], function() {
    Route::get('/', function() {
        // handles the path /api
    });

    Route::get('users', function() {
        // handles the path /api/users
    });
});

// Route suffixing, or subdomain routing
Route::group(['domain' => '{account}.myapp.com', 'namespace' => 'API'], function () {

    // Usage of namespace of API means the controller (if used) would be found here:
    // App\Http\Controllers\API\MyController

    Route::get('/', function($account) {
        //handles /$account.myapp.com
    });
    Route::get('users/{id}', function($account, $id) {
        // handles /users/$id/$account.myapp.com
    });
});