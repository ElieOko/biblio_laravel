<?php

namespace App\Http\Controllers;

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
    
}
