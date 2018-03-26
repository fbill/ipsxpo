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

Route::get('/',[
    'as'    => 'web.index',
    'uses'  =>  'WebController@index'
]);

Route::get('/about_us',[
    'as'    => 'web.about',
    'uses'  =>  'WebController@about'
]);

Route::get('/advantage',[
    'as'    => 'web.advantage',
    'uses'  =>  'WebController@advantage'
]);

/*Route::get('/quote',[
    'as'    => 'web.quote',
    'uses'  =>  'QuotationsController@getQuota'
]);*/
Route::get('/quote','QuotationsController@getQuota')->name('web.quote');

Route::get('/products',[
    'as'    => 'web.products',
    'uses'  =>  'WebController@products'
]);
Route::get('/faq',[
    'as'    => 'web.faq',
    'uses'  =>  'WebController@faq'
]);
Route::get('/contact',[
    'as'    => 'web.contact',
    'uses'  =>  'WebController@contact'
]);
Route::get('/request_budget',[
    'as'    => 'web.request',
    'uses'  =>  'WebController@request_budget'
]);

Route::get('getPortOrigin/{id}','QuotationsController@getPortOrigin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
