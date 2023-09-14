<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;


class DemandeController extends Controller
{
    //
    public function demandePublication(Request $request)
    {
        # code...
        $year = date("Y");
        $student = $request->EtudiantFId;
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
