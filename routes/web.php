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

    //Content Route
    Route::resource('content', 'Back\ContentController'); 
    Route::get('deletecontent/{id}', 'Back\ContentController@delete')->name('delete');
    Route::get('toggle', 'Back\ContentController@toggleUpdate')->name('toggle');

    //Category Route
    Route::get('categories', 'Back\CategoryController@index')->name('categories');
    Route::get('categories/getData', 'Back\CategoryController@getData')->name('categories.getData');
    Route::post('categories/create', 'Back\CategoryController@create')->name('category.create');
    Route::post('categories/update', 'Back\CategoryController@update')->name('category.update');

    Route::get('toggle/category', 'Back\CategoryController@toggleUpdateCategory')->name('toggleCategory');
});





/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'Front\Homepage@index')->name('homepage');

Route::get('/post/{slug}', 'Front\Homepage@contentDetail')->name('contentDetail');

Route::get('/note', 'Front\Homepage@note')->name('note');

Route::get('/about', 'Front\Homepage@about')->name('about');

Route::get('/contact', 'Front\Homepage@contact')->name('contact');

Route::get('/{category}', 'Front\Homepage@category')->name('category');

