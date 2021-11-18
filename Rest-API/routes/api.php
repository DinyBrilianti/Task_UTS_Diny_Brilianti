<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;
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
#membuat route untuk memanggil semua data
Route::get('/patients',[
    PatientsController::class,'getAll'
]);

#membuat route untuk membuat data
Route::post('/patients',[
    PatientsController::class,'createData'
]);

#membuat route untuk membuat data berdasarkan ID
Route::get('/patients/{id}',[
    PatientsController::class,'getById'
]);

#membuat route untuk memperbaharui data
Route::put('/patients/{id}',[
    PatientsController::class,'updateData'
]);

#membuat route untuk menghapus Data
Route::delete('/patients/{id}',[
    PatientsController::class,'deleteData'
]);

#membuat route untuk membuat data berdasarkan nama
Route::get('/patients/search/{name}',[
    PatientsController::class,'getByName'
]);

#membuat route untuk memanggil pasien yang statusnya positive
Route::get('/patients/status/positive',[
    PatientsController::class,'getStatusPositive'
]);


#membuat route untuk memanggil pasien yang statusnya sembuh
Route::get('/patients/status/recovered',[
    PatientsController::class,'getStatusRecovered'
]);


#membuat route untuk memanggil pasien yang statusnya meninggal
Route::get('/patients/status/dead',[
    PatientsController::class,'getStatusDead'
]);