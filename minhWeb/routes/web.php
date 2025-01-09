<?php

use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}', function (String $id) {
    $users = User::all();
    echo($users);
    return new UserResource(User::findOrFail($id));
});
