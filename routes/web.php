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

Route::get('/', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/web-design', 'PagesController@webdesign');
Route::get('/graphic-design', 'PagesController@graphicdesign');
Route::get('/user-experience-optimization', 'PagesController@userexperienceoptimization');
Route::get('/web-maintenance', 'PagesController@webmaintenance');
Route::get('/how-it-works', 'PagesController@howitworks');
Route::resource('posts', 'PostsController')->except('show');
Route::get('/posts/{slug}', 'PostsController@show')->name('posts.show');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/privacy-policy', 'PagesController@privacypolicy');
Route::get('/refund-policy', 'PagesController@refundpolicy');
Route::get('/sales-policy', 'PagesController@salespolicy');
Route::get('/terms-of-use', 'PagesController@termsofuse');
Route::get('/faqs', 'PagesController@faqs');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');