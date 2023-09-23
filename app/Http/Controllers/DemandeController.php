<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Etudiant;
use Illuminate\Http\Request;


class DemandeController extends Controller
{
    //
    public function demandePublication(Request $request)
    {
        # code...
        $year = date("Y");
        $student = (int)$request->student_id ;
        if($student){
            $verify = Demande::where("fk_etudiant",$student)->get();
            if(count($verify) > 0){
                 die("Vous aviez envoyé récemment une demande de publication");
            }  
            else{
             $demande_student = Demande::create([
                 "annee"=>$year,
                 "state"=>true,
                 "fk_etudiant"=>$student,
                ]);
                dd("Demande Envoyer");
            }
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
    public function main_page()
    {
        # code...
        return view('sectionAdmin.demande.index');
    }
    public function demandeBySection($section_id)
    {
        # code...
        return view('sectionAdmin.demande.section.index');
    }
    public function demandeBySectionAndPromotion($section_id,$promotion_id)
    {
        # code...
        return view('sectionAdmin.demande.section.promotion.demande');
    }
}
