<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Utilisateur;

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


Route::resource('utilisateurs','App\Http\Controllers\UtilisateurController');
Route::resource('avis','App\Http\Controllers\AvisController');
Route::resource('sceances','App\Http\Controllers\SceanceController');
Route::resource('publications','App\Http\Controllers\PublicationController');
Route::resource('inscriptions','App\Http\Controllers\InscriptionController');

Route::post('login','App\Http\Controllers\LoginController@store');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

