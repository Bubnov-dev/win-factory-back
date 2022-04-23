<?php

use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;

Route::get('/', 'IndexController@index')->name('index');
Route::get('/agreement', 'IndexController@agreement')->name('agreement');
Route::get('/alyuminievye-dveri', 'IndexController@aluminium')->name('aluminium');
Route::get('/osteklenie-balkonov-i-lodzhij', 'IndexController@balconies')->name('balconies');
Route::get('/plastikovye-dveri', 'IndexController@doors')->name('doors');
Route::get('/osteklenie-domov-i-kottedzhej', 'IndexController@window')->name('window');
Route::post('/request', 'IndexController@request')->name('request');;

Route::get('/articles/{id}', function($id){
    return ArticleController::uiShow($id);
});


Route::get('/articles', function(){
    return ArticleController::uiIndex();
})->name('articles');

Route::get('/reviews/{id}', function($id){
    return ReviewController::uiShow($id);
});


Route::get('/reviews', function(){
    return ReviewController::uiIndex();
})->name('reviews');



Route::prefix('admin')->group(function () {
    Route::get('/test', function(){
        return ' test';
    });

    Route::prefix('/articles')->group(function () {

        Route::post('/show', function (Request $request) {
            return ArticleController::show($request);
        });
        Route::post('/create', function (Request $request) {
            return ArticleController::create($request);
        });
        Route::post('/update', function (Request $request) {
            return ArticleController::update($request);
        });
        Route::post('/get', function (Request $request) {
            return ArticleController::index( $request->input('isPublished')?? '1');
        });

        Route::post('/delete', function (Request $request){
            return ArticleController::destroy($request);
        });
    });

    Route::prefix('/reviews')->group(function () {

        Route::post('/show', function (Request $request) {
            return \App\Http\Controllers\ReviewController::show($request);
        });
        Route::post('/create', function (Request $request) {
            return \App\Http\Controllers\ReviewController::create($request);
        });
        Route::post('/update', function (Request $request) {
            return \App\Http\Controllers\ReviewController::update($request);
        });
        Route::post('/get', function (Request $request) {
            return \App\Http\Controllers\ReviewController::index( $request->input('isPublished')?? '1');
        });
        Route::post('/delete', function (Request $request){
            return ReviewController::destroy($request);
        });
    });

    Route::post('uploadFile', function (Request $request)
    {
        return \App\Http\Controllers\FileController::uploadFile($request->file('file'), $request->input('tmp') ?? null);
    });
});
Route::get('/panelAdmin', function (){
    return \App\Http\Controllers\AdminPanelController::index();
})->middleware('auth');
Route::get('/panelAdmin/{some}', function (){
    return \App\Http\Controllers\AdminPanelController::index();
})->middleware('auth');
Route::get('/panelAdmin/{a}/{b}', function (){
    return \App\Http\Controllers\AdminPanelController::index();
})->middleware('auth');
Auth::routes(['register' => false]);

//Route::get('/home', 'HomeController@index')->name('home');
