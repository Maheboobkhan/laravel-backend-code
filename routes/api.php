<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceRequestController;

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

Route::post('/send-message', [ChatController::class, 'sendMessage']);

Route::post('/contact', [ContactusController::class, 'store']);
Route::post('users', [UserController::class, 'store']);
Route::get('users', [ServiceRequestController::class, 'index']);
Route::post('/users/{id}/clientmessage', [ServiceRequestController::class, 'postClientMessage']);
Route::post('/users/{id}/ownermessage', [ServiceRequestController::class, 'postOwnerMessage']);
Route::get('/users/{id}/clientmessage', [ServiceRequestController::class, 'getClientMessage']);
Route::get('/users/{id}/ownermessage', [ServiceRequestController::class, 'getOwnerMessage']);
// Route::post('/users/{id}/ownermessage', [UserController::class, 'postOwnerMessage']);

// Route to retrieve a specific user by their ID
Route::get('/users/{id}', [UserController::class, 'show']);


Route::post('/store-service', [ServiceRequestController::class, 'storeService']);
Route::post('/store-details', [ServiceRequestController::class, 'storeDetails']);
Route::get('/get-details/{id}', [ServiceRequestController::class, 'getDetails']);


// Route::post('chats', [ChatController::class, 'store']);
// Route::get('chats', [ChatController::class, 'getChats']);
// Route::get('chats/{id}', [ChatController::class, 'getChat']);
// Route::post('messages', [MessageController::class, 'store']);
// Route::get('messages/{chat_id}', [MessageController::class, 'getMessages']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
