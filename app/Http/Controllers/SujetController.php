<?php

namespace App\Http\Controllers;

use App\Models\Sujet;
use Illuminate\Http\Request;
use App\Http\Controllers\SujetController;

class SujetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //view("student.publication",compact("msg"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("student.publication");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Sujet = Sujet::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'fichier' => $request->fichier,
            'autorisation' => $request->autorisation,
            'fk_etudiant' => $request->fk_etudiant,
            'fk_prof' => $request->fk_prof,
        ]); 
        $msg = "Enregistrement réussi avec succès";
        return view("dashboard",compact("msg"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Sujet $sujet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sujet $sujet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sujet $sujet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sujet $sujet)
    {
        //
    }
}
