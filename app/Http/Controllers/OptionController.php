<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Section;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $sections = Section::all();
        return view('option',compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $section = Option::create([
            'nomOption' => $request->nomOption,
            'fk_section' => $request->fk_section
        ]); 
        return redirect("/dashboard");
    }

    /**
     * Display the specified resource.
     */
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Option $option)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Option $option)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Option $option)
    {
        //
    }
}
