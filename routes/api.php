<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\MemberController;
 use App\Http\Controllers\UserAuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get("/test",function(){


return ["name"=>"shivank tiwari"];

});





Route::get('student',[studentController::class,'list']);
Route::post('add-student',[studentController::class,'addStudent']);
Route::put('update-student',[studentController::class,'updateStudent']);
Route::delete('delete-student',[studentController::class,'deleteStudent']);
Route::resource('member',MemberController::class);

Route::post('signup' ,[UserAuthController::class, 'signup']);

Route::post('login' ,[UserAuthController::class, 'login']);