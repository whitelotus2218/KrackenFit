<?php

Route::get('/dashboard', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('atletum')->user();

    //dd($users);

    return view('atletum.dashboard');
})->name('home');

