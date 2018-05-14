<?php

Route::get('/dashboard', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();
    return view('admin.dashboard');
})->name('home');
//Validaciones con autenticación
Route::get('/perfil','profileController@perfilAdministrador');
Route::get('/registrarAtleta','profileController@registrarAtleta');
Route::get('/registrarEmpleado','profileController@registrarEmpleado');
//Registro de Atleta
Route::get('/registrarAtleta','atletaController@create')->name('registrarAtleta');
Route::post('/registrarAtleta','atletaController@store');
//Registro de Empleado
Route::get('/registrarEmpleado', 'employeeController@create')->name('registrarEmpleado');
Route::post('/registrarEmpleado','employeeController@store');

Route::get('/suscriptores', 'profileController@index');
Route::get('/empleados', 'profileController@mostrarEmpleados');
Route::get('/coach', 'profileController@mostrarcoach');
Route::get('/home','profileController@perfilAdministrador');
Route::get('/dashboard', 'profileController@contenidoDashboard');
Route::put('/suscriptores','atletaController@update');
