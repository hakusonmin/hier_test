<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\Sku;

Route::prefix('user')
    ->middleware('auth')//userはデフォルトなので auth:userとしてはいけない
    ->name('user.')
    ->group(function () {

        //ユーザーダッシュボードへのルーティング←ここでジャンルのLevel1の奴を呼ぶ
        Route::get('/', function () {
            return view('web.user.index');
        })->name('index');

        Route::resource('categories', Category::class);

        Route::resource('products', Product::class);

        Route::resource('skus', Sku::class);
    });
