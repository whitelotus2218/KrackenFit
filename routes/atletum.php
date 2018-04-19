<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('atletum')->user();

    //dd($users);

    return view('atletum.home');
})->name('home');

