<?php

namespace App\Http\Controllers;

use App\Models\TravailScientifique;
use Illuminate\Http\Request;

class TravailScientifiqueController extends Controller
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
        return view("section.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     */
    public function show(TravailScientifique $travailScientifique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TravailScientifique $travailScientifique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TravailScientifique $travailScientifique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TravailScientifique $travailScientifique)
    {
        //
    }
}
