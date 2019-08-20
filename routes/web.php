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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//Route::get('/a',function (){
//    $user=\App\User::find(2);
//    dd( $user->isAdmin());
////    return
////    return $user;
//});

Route::group(['middleware' => 'IsAdmin'], function() {

    route::resource('company','AdminCompanyController');

});

Route::group(['middleware' => 'IsAdmin'], function() {

    route::resource('branch','BranchController');
    route::get('/branch_detail/{id}','BranchController@detail')->name('branch.detail');
    route::get('/create_branch/{id}','BranchController@createBranch')->name('branch.branchCreate');

});
