<?php

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/

Route::prefix('nedmin')->middleware('isLogin')->group(function(){
Route::get('/','Back\AuthController@login')->name('login'); 
Route::post('/','Back\AuthController@loginPost')->name('loginPost');
});

Route::get('nedmin/logout', 'Back\AuthController@logout')->name('logout');

Route::prefix('nedmin')->middleware('isAdmin')->group(function(){

    Route::get('dashboard','Back\Dashboard@dashboard')->name('dashboard');

    //Comment Route
    Route::get('bionluk-comments', 'Back\BionlukCommentController@index')->name('bionluk-comments.index');
    Route::get('bionluk-comments/create', 'Back\BionlukCommentController@create')->name('bionluk_comment.create');
    Route::post('bionluk-comments/store', 'Back\BionlukCommentController@store')->name('bionluk_comment.store');
    Route::get('bionluk-comments/delete/{id}', 'Back\BionlukCommentController@delete')->name('bionluk_comment.delete');
    Route::get('bionluk-comments/updatePage/{id}', 'Back\BionlukCommentController@updatePage')->name('bionluk_comment.updatePage');
    Route::post('bionluk-comments/update/{id}', 'Back\BionlukCommentController@update')->name('bionluk_comment.update');

    //Github Route
    Route::get('github', 'Back\GithubController@index')->name('github.index');
    Route::get('github/create', 'Back\GithubController@create')->name('github.create');
    Route::post('github/store', 'Back\GithubController@store')->name('github.store');
    Route::get('github/delete/{id}', 'Back\GithubController@delete')->name('github.delete');
    Route::get('github/edit/{id}', 'Back\GithubController@edit')->name('github.edit');
    Route::post('github/update/{id}', 'Back\GithubController@update')->name('github.update');

    //Banner Route
    Route::get('banner', 'Back\BannerController@index')->name('banner.index');
    Route::get('banner/create', 'Back\BannerController@create')->name('banner.create');
    Route::post('banner/store', 'Back\BannerController@store')->name('banner.store');
    Route::get('banner/delete/{id}', 'Back\BannerController@delete')->name('banner.delete');
    Route::get('banner/edit/{id}', 'Back\BannerController@edit')->name('banner.edit');
    Route::post('banner/update/{id}', 'Back\BannerController@update')->name('banner.update');

    //Banner Route
    Route::get('settings', 'Back\SettingsController@index')->name('settings.index');
    Route::post('settings/update/{id}', 'Back\SettingsController@update')->name('settings.update');
});





/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'Front\Homepage@index')->name('homepage');

Route::get('/post/{slug}', 'Front\Homepage@contentDetail')->name('contentDetail');

Route::get('/about', 'Front\Homepage@about')->name('about');

Route::get('/contact', 'Front\Homepage@contact')->name('contact');

