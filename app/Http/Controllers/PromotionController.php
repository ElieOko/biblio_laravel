<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $promotions = Promotion::all();
        return view('section.promotion.all', compact('promotions'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $sections = Section::all();
        return view('section.promotion.create',compact('sections'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $is_selected = false;
        if ($request->isTerminal == "ON"){
            $is_selected = true;
        }
        $promotion = Promotion::create([
            'nom' => $request->nom,
            'isTerminal'=>  $is_selected,
            'fk_section'=>$request->section,
            'abreviation'=> $request->abreviation
        ]); 
        $msg = "Enregistrement réussi avec succès";
       // $promotions = Promotion::all();
        return redirect('/dashboard');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promotion $promotion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promotion $promotion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promotion $promotion)
    {
        //
    }
}
