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

Route::get('/proxy',ProxyController::class.'@index');
Route::get('/factory',FactoryController::class.'@index');
Route::get('/Facade',FacadeController::class.'@index');
Route::get('/Singleton',SingletonController::class.'@index');
Route::get('/Composite',CompositeController::class.'@index');
Route::get('/Prototype',PrototypeController::class.'@index');
