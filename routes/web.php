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

// ===========controller@function==
Route::get('/', 'checks@check_function');


Route::get('full/{todo_view}', 'checks@full_details');


// create to-dos route
Route::get('create-todos', 'checks@create_todos');

//store the data in database
Route::post('store-data', 'checks@store_todos');

// full/{{$check_print->id}}/completed
// compelete check data
Route::get('{todo}/completed', 'checks@check_completed');


//edit the data in database
Route::get('{todo}/edit', 'checks@edit_data');

// final edit
Route::POST('{todo}/update-final', 'checks@final_edit');


// delete list
Route::get('{todo}/delete', 'checks@final_delete');




