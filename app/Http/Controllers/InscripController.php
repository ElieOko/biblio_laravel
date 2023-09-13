<?php

namespace App\Http\Controllers;

use App\Models\Inscrip;
use Illuminate\Http\Request;

class InscripController extends Controller
{
    public function index()
    {
        $etudiants=Inscrip::all();
        return view('index',compact('etudiants'));

    }


    public function store(Request $request)
    {
        $nom = $request->input('nom');
        $postnom = $request->input('postnom');
        $prenom = $request->input('prenom');
        $profession = $request->input('profession');

        if ($profession === 'etudiant') {
            $etudiants = Inscrip::create([
                'nom' => $request->nom,
                'postnom' => $request->postnom,
                'prenom' => $request->prenom,
                'section' => $request->section,
                'promotion' => $request->promotion,
                'profession' => $request->profession,
            ]);
            return redirect()->route('etudiants.index');
        } elseif ($profession === 'section') {
          $section=Inscrip::create([
                'nom' => $request->nom,
                'postnom' => $request->postnom,
                'prenom' => $request->prenom,
                'matricule' => $request->matricule,
                'profession' => $request->profession,
          ]);
            return redirect()->route('etudiants.index');

        } elseif ($profession === 'bibliotheque') {
            $bibliotheque=Inscrip::create([
                'nom' => $request->nom,
                'postnom' => $request->postnom,
                'prenom' => $request->prenom,
                'matricule' => $request->matricule,
                'profession' => $request->profession,
          ]);

            return redirect()->route('etudiants.index');
        }
    }
}
