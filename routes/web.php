<?php

//use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//この二つが超大事
Route::prefix('user')->name('user.')->group(function () {
  require __DIR__ . '/web_user.php';
});

Route::prefix('admin')->name('admin.')->group(function () {
  require __DIR__ . '/web_admin.php';
});

require __DIR__ . '/web_user_common.php';
