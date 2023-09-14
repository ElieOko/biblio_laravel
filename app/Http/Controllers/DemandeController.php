<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Etudiant;
use Illuminate\Http\Request;


class DemandeController extends Controller
{
    //
    public function store(Request $request)
    {
        # code...
        $year = date("Y");
        $student = (int)$request->EtudiantFId ;
        if($student){
          if(count (Etudiant::all())!= 0){
            $verify = Demande::where("EtudiantFId",$student)->get();
            if(count($verify) == 0){
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
            die("Aucun Student");
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
