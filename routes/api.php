<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\DB;

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

Route::post('/login',function(Request $request){
    

    $user = DB::select('select * from utilisateurs where email=?',[$request->email]);
    if($user[0]->password == $request-> password ){
        return $user;
    }else{
        return 0;
    }

});


Route::post('/user-inscriptions',function(Request $request){

    error_log($request->id);

    $id=$request->id;
    $user = Utilisateur::find($request->id);
    $notFiltered = $user::with('etudiant_inscription')->get();
   
    foreach ($notFiltered as $value){
        if($value->id == $id){
            return $value->etudiant_inscription;
        }
    }

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

