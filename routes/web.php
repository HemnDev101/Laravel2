<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController; 
 

Route::get('/',  [EmployeeController::class , 'index'] );

Route::post('/insertProcessing'  , [EmployeeController::class, 'insertProcessing'] ) ;

Route::get('/insert' , [EmployeeController::class , 'insert']) ; 

Route::get('/view' , [EmployeeController::class  , 'view']) ; 

Route::get('/searchProcessing' , [EmployeeController::class , 'searchProcessing']) ; 

Route::get('/search' , [EmployeeController::class , 'search']);

Route::get('/delete', [ EmployeeController::class ,  'delete'] );

Route::get('/deleteProcessing', [ EmployeeController::class ,  'deleteProcessing' ] );

Route::get('/update' , [EmployeeController::class , 'update']) ;


Route::get('/updateProcessing' , [EmployeeController::class , 'updateProcessing'] );

