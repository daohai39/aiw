<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/article/{limit?}', 'ArticleController@allArticles');

// Route::get('/article/category/{category_id}/{limit?}', function(){

// });

// Route::get('/article/{slug}', function(){

// });

// Route::get('/article/{article_id}', function(){

// });

// // Route::get('/article/tags/')
// //unfinish

// Route::get('/article/{article_id}/related/{limit?}',function(){

// });


// Route::get('/category/{level}/{?limit}', function(){

// });

Route::get('/category/{category_id}', 'CategoryController@searchById');

// Route::get('/category/{slug}', function(){

// });

// Route::get('/category/{category_id}/{children}', function(){

// });

Route::get('/comment/{article_id}/{limit?}', 'CommentController@SearchById');

// Route::post('/comment/article/{article_id}',function(){

// });


