<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function showForm()
    {
        return view('inscription');
    }

    public function register(Request $request)
    {
        $nom = $request->input('nom');
        $postnom = $request->input('postnom');
        $prenom = $request->input('prenom');
        $profession = $request->input('profession');

        if ($profession === 'etudiant') {
            $promotion = $request->input('promotion');
            $section = $request->input('section');

            // Traitement de l'inscription pour les étudiants
            // Redirection vers la page d'accueil simple pour les étudiants
            return redirect()->route('accueil-simple');
        } elseif ($profession === 'section') {
            $matricule = $request->input('matricule');

            // Traitement de l'inscription pour les sections
            // Redirection vers la page d'administration des sections
            return redirect()->route('admin-section');
        } elseif ($profession === 'bibliotheque') {
            $matricule = $request->input('matricule');

            // Traitement de l'inscription pour les bibliothèques
            // Redirection vers la page d'administration desbibliothèques
            return redirect()->route('admin-bibliotheque');
        }
    }
}