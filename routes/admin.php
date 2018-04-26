<?php

Route::get('/dashboard', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.dashboard');
})->name('home');
//Validaciones con autenticación
Route::get('/perfil','profileController@perfilAdministrador');
Route::get('/registrarAtleta','profileController@registrarAtleta');
Route::get('/registrarEmpleado','profileController@registrarEmpleado');
//Registro de Atleta
Route::get('/registrarAtleta','userController@create')->name('registrarAtleta');
Route::post('/registrarAtleta','userController@store');
//Registro de Empleado
Route::get('/registrarEmpleado', 'employeeController@create')->name('registrarEmpleado');
Route::post('/registrarEmpleado','employeeController@store');
