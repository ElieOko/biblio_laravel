<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use Illuminate\Http\Request;

class ProfController extends Controller
{
    public function index(){
        $profs= Prof::All();
        return view('sectionAdmin.index',compact('profs'));
    }

    public function create(){
        return view('sectionAdmin.AjoutProf');
    }

    public function store(Request $request)
    {
        $request->validate([
            'matricule' => 'required',
            'grade' => 'required',
            'nom' => 'required|string',
            'postnom' => 'required|string',
            'prenom' => 'required|string',
        ]);
        $profs = Prof::create([
            'matricule' => $request->matricule,
            'grade' => $request->grade,
            'nom' => $request->nom,
            'postnom' => $request->postnom,
            'prenom' => $request->prenom,
        ]);
        return redirect()->route('prof.index');
    }
}
