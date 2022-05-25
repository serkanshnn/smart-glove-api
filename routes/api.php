<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/activities/{name}', function ($name) {
   $form = \App\Models\Form::where('name', $name)->first();

   if ($form) {
       $now = Carbon::now();
       $nowParams = explode('.', $now->format('H.i'));
       $hourParams = explode('.', $form->hour);
       $nowMinutesTotal = (((int)$nowParams[0]+3)%24)*60 + (int)$nowParams[1];
       $hourMinutesTotal = (int)$hourParams[0]*60 + (int)$hourParams[1];
       $diff = $hourMinutesTotal - $nowMinutesTotal;
       $isRightNow = $diff > 0 && $diff < 30;

       $result = $form->toArray();
       $result['activity'] = $result['activity'] . ($isRightNow ? ' *' : '');

       return [ 'activity' => $result['activity'] ];
   }

   return [ 'activity' => 'Not setted' ];
});
