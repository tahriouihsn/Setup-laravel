<?php

namespace App\Http\Controllers\Prof;

use App\Enseignant;
use App\Etudiant;
use App\Http\Controllers\Controller;
use App\Matiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EtudiantController extends Controller
{
    //
    public function listModules(){
        $id_prof=Enseignant::select('id')->where('id_user','=',Auth::id())->first()->id;
        $matieres=Matiere::select('id','nom_mat')->where('id_ens','=',$id_prof)->get();
        return view('Enseignant.listModules',compact('matieres'));
    }
    public function listEtudiant($id){
        $filiere = Matiere::find($id)->filieremat()->get();
        foreach($filiere as $f){

          $id_fil = $f->id;
          $etudiants = Etudiant::where('id_filiere',$id_fil)->get();
        }

          return view('Enseignant.listetudiant',compact('etudiants'));

    }
}
