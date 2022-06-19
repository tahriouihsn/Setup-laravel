<?php

namespace App\Http\Controllers\Etudiant;

use App\Etudiant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EtudiantController extends Controller
{
    //
    public function index(){
        $user=Auth::id();
        $etudiant=Etudiant::with(['absenceEtudiant','absenceEtudiant.seanceabs'])->where('id_user',$user)->first();
        $abs=$etudiant->absenceEtudiant;
        return view('Etudiant.EspaceEtudiant',compact('etudiant','abs'));
    }
}
