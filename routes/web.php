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
})->name('home');

Route::post('form', function (\Illuminate\Http\Request $request) {
    \App\Models\Form::updateOrCreate([
        'name' => $request->get('name'),
    ], [
        'activity' => $request->get('activity'),
        'hour' => $request->get('hour'),
    ]);

    $message = 'Succcessfully saved!';

    return redirect()->route('home')->with([ 'message' => $message ]);
})->name('form');
