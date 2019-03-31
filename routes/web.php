<?php

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/categories/{categoryName}', function ($categoryName) {
  switch($categoryName) {
    case 'bouqet':
      return view('bouqet');
      break;
    case 'crown':
      return view('crown');
      break;
    case 'wedding':
      return view('wedding');
      break;
    case 'composition':
      return view('composition');
      break;
    default:
      return view('categories');
      break;
  }
});

Route::get('/articles', function () {
    return view('articles');
});

Route::get('/articles/{number}', function ($number) {
    return view('article'.$number);
});

Route::get('/contact', function () {
    return view('contact');
});
