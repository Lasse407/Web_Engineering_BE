<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BlogpostController;
use App\Http\Controllers\Api\NotificationsController;
use App\Http\Controllers\Api\SettingsController;
use App\Http\Controllers\Api\EventsController;
use App\Http\Controllers\Api\LectureController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('blogposts', BlogpostController::class);
Route::apiResource('notifications', NotificationsController::class);
Route::apiResource('settings', SettingsController::class);
Route::apiResource('events', EventsController::class);
Route::apiResource('lectures', LectureController::class);
