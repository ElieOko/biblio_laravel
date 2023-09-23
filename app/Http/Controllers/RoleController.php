<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $roles = Role::all();
        return view("sectionAdmin.role.all",compact("roles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("sectionAdmin.role.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = Role::create([
            'nom' => $request->nom,
        ]); 
        $roles = Role::all();
        $msg ="Enregistrement réussi avec succès";
        return redirect('/role/all')->with('roles',  $roles);
    }

    /**
     * Display the specified resource.
     */
    public function attribution_page()
    {
        //
        return view("sectionAdmin.role.attribution");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}
