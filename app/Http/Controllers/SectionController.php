<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function page()
    {
        return view("BibliothequeAdmin.index");
    }
    public function index()
    {
        return view("sectionAdmin.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("section.create");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $section = Section::create([
            'nom' => $request->nom,
        ]); 
        $msg ="Enregistrement réussi avec succès";
        return redirect('/dashboard');
        //return  view("section.all",compact('msg','sections'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        //       //
        //$sections = Section::all();
        //return view("section.all",compact("sections"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Section $section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        //
    }
}
