<?php

use App\Http\Controllers\SensorController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('sensor', function () {
//     $data = [
//         'status' => true,
//         'message' => 'Data sensor ditemukan',
//         'data' => null,
//         'errors' => null,
//     ];
//     return response()->json($data, 200);
// });
// Route::post('sensor', function () {
//     $data = [
//         'status' => true,
//         'message' => 'Response post method sensor ditemukan',
//         'data' => null,
//         'errors' => null,
//     ];
//     return response()->json($data);
// });
// Route::patch('sensor/{id}', function ($id) {
//     $data = [
//         'status' => true,
//         'message' => 'Response patch method id ' . $id,
//         'data' => null,
//         'errors' => null,
//     ];
//     return response()->json($data);
// });

// Route::delete('sensor/{id}', function ($id) {
//     $data = [
//         'status' => true,
//         'message' => 'Response delete method id ' . $id,
//         'data' => null,
//         'errors' => null,
//     ];
//     return response()->json($data);
// });
// Routing menggunakan controller
// Route::get('sensor', [SensorController::class, 'index']);
// Route::post('sensor', [SensorController::class, 'store']);
// Route::patch('sensor/{id}', [SensorController::class, 'update']);
// Route::delete('sensor/{id}', [SensorController::class, 'destroy']);
// Routing menggunakan controller resource
Route::resource('sensor', SensorController::class);
