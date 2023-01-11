<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Cl_Controller;
use App\Http\Controllers\Rd_Controller;
use App\Http\Controllers\Fm_Controller;
use App\Http\Controllers\Zn_Controller;
use App\Http\Controllers\Cs_Controller;
use App\Http\Controllers\api\Auth_Controller;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) { return $request->user(); });
