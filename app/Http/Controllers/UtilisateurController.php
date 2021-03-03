<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all
        $users = Utilisateur::all();
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create 


  

        return Utilisateur::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get one 
       $user=Utilisateur::find($id);
       if($user->role=="ETUDIANT"){
        return $user::with('etudiant_inscription')->get();
       }else if($user->role=="ENSEIGNANT"){
        return $user::with('enseignant_sceance','enseignant_avis')->get();

       }

        
        // if($user->role == 'ETUDIANT'){
        //     error_log("resultat" . $user::with('etudiant_inscription',"etudiant_avis")->get());
        //     return $user::with('etudiant_inscription',"etudiant_avis")->get();
        // }elseif ($user->role == 'ENSEIGNANT'){
        //     error_log("resultat" . $user::with('etudiant_inscription',"etudiant_avis")->get());
        //     return $user::with('enseignant_avis','enseignant_publication')->get();
        // }

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // update

        $user = Utilisateur::find($id);
        $user->update($request->all());
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete one 
        return Utilisateur::destroy($id);
    }
}
