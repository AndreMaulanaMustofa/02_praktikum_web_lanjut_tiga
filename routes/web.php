<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('products')->group(function(){
    Route::get('marble-edu-games', function () {
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });

    Route::get('marble-and-friends', function () {
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    });

    Route::get('riri-story-books', function () {
        return redirect('https://www.educastudio.com/category/riri-story-books');
    });

    Route::get('kolak-kids-songs', function () {
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });

    Route::get('kabi-islamic-books', function () {
        return redirect('https://www.educastudio.com/category/kabi-islamic-books');
    });

    Route::get('marble-junior', function () {
        return redirect('https://www.educastudio.com/category/marbel-junior');
    });

    Route::get('keong-casual-games', function () {
        return redirect('https://www.educastudio.com/category/keong-casual-games');
    });
});

Route::get('news/{id?}', function ($id = 'https://www.educastudio.com/news') {
    return redirect($id . '/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19');
});

route::prefix('program')->group(function(){
    Route::get('karir', function(){
        return redirect('https://www.educastudio.com/program/karir');
    });

    Route::get('magang', function () {
        return redirect('https://www.educastudio.com/program/magang');
    });

    Route::get('kunjungan-industri', function () {
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    });
});

Route::get('/about', function () {
    return view('about');
});

Route::resource('contact', ContactController::class)->only([
    'index'
]);
