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
//Route::get('/sms/send/', function(\Nexmo\Client $nexmo){
//    $message = $nexmo->message()->send([
//        'to' => '+923024652508',
//        'from' => '+923128984447',
//        'text' => 'Sending SMS from Laravel. yay!!!'
//    ]);
//    return true;
//});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');




    Route::group(['middleware'=>'role:admin'],function (){

        route::resource('company','AdminCompanyController');
        route::resource('role','RoleController');
        route::get('/user_roles','RoleController@user_roles_index')->name('role.user_roles');
        route::post('/assign_role','RoleController@assign_role')->name('role.assign_role');
        route::post('/delete_role','RoleController@delete_role')->name('role.delete_role');

    });


//    using construct handle
    route::get('/create_branch/{id}','BranchController@createBranch')->name('branch.branchCreate');
//

    route::resource('branch','BranchController');
    route::get('/branch_detail/{id}','BranchController@detail')->name('branch.detail');


    route::get('/check','AdminCompanyController@check');


