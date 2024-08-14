<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// nampilin index
Route::get('/', [MemberController::class,'index']);

// nampilin form
Route::get('/input', [MemberController::class,'input']);

// nampilin create
Route::post('/store', [MemberController::class,'store']);

// edit
Route::get('/edit/{id}', [MemberController::class,'edit']);
Route::put('/update/{id}', [MemberController::class,'update']);

// delete
Route::delete('/update/{id}', [MemberController::class,'destroy']);
