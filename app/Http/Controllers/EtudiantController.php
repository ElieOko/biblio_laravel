<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){
        $etudiants= Etudiant::All();
        return view('sectionAdmin.ListeEtudiant',compact('etudiants'));
    }

    public function create(){
        return view('sectionAdmin.AjoutEtudiant');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'postnom' => 'required',
            'prenom' => 'required|string',
            'section' => 'required|string',
            'promotion' => 'required|string',
        ]);
        $etudiants = Etudiant::create([
            'nom' => $request->nom,
            'postnom' => $request->postnom,
            'prenom' => $request->prenom,
            'section' => $request->section,
            'promotion' => $request->promotion,
        ]);
        return redirect()->route('etudiants.index');
    }
    public function demandePublication(Request $request)
    {
        # code...
        $year = date("Y");
        $student = int($request->EtudiantFId) ;
        if($student){
              $verify = Demande::where("EtudiantFId",$student)->get();
           if(count($verify) != 0){
                die("Vous aviez envoyé récemment une demande de publication");
           }  
           else{
            $demande_student = Demande::create([
                "annee"=>$year,
                "state"=>true,
                "EtudiantFId"=>$student,
               ]);
           }
        }
        else{
            die("Pour acceder acceder à cette fonctionnalité vous dévriez être connecté");
        }
        return view('index');
    }
    public function approuverDemande(Request $request)
    {
        # code...
        $demande_id = $request->demande_id;
        $demande = Demande::find($demande_id);
        $demande->isActive = true;
        $demande->update();
    
    }
}
