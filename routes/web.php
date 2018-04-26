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
    return view('/welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Rutas de empleado
Route::group(['prefix' => 'employee'], function () {
  Route::get('/login', 'EmployeeAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'EmployeeAuth\LoginController@login');
  Route::post('/logout', 'EmployeeAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'EmployeeAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'EmployeeAuth\RegisterController@register');

  Route::post('/password/email', 'EmployeeAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'EmployeeAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'EmployeeAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'EmployeeAuth\ResetPasswordController@showResetForm');
});


/*Route::get('/admin/dashboard', function() {
    return view('admin/dashboard');
});*/
/*Route::get('/admin/registrarEmpleado', function() {
    return view('admin/registrarEmpleado');
});*/
/*Route::get('/admin/registrarAtleta', function() {
    return view('admin/registrarAtleta');
});*/

//Rutas de atleta
Route::group(['prefix' => 'atletum'], function () {
  Route::get('/login', 'AtletumAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AtletumAuth\LoginController@login');
  Route::post('/logout', 'AtletumAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AtletumAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AtletumAuth\RegisterController@register');

  Route::post('/password/email', 'AtletumAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AtletumAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AtletumAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AtletumAuth\ResetPasswordController@showResetForm');
});
//Rutas de Administrador
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
  Route::get('/dashboard/{id}','AdminAuth\LoginController@myDash');
  //Registro de Atleta
  Route::get('/registrarAtleta','userController@create')->name('registrarAtleta');
  Route::post('/registrarAtleta','userController@store');
  //Registro de Empleado
  //Route::get('/registrarEmpleado', 'employeeController@create')->name('registrarEmpleado');
  //Route::post('/registrarEmpleado','employeeController@store');
});
