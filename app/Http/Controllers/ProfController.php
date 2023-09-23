<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class ProfController extends Controller
{
    public function index(){
        $profs= Prof::All();
        return view('sectionAdmin.prof.all',compact('profs'));
    }

    public function create(){
        $grades = Grade::all(); 
        return view('sectionAdmin.prof.create',compact('grades'));
    }
    public function promotio_prof_create(){
        return view('sectionAdmin.prof.promotionProf');
    }

    public function store(Request $request)
    {   
        $request->validate([
            'matricule' => 'required',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'nom' => 'required',
            'postnom' => 'required',
            'prenom' => 'required|string',
            'genre' => 'required'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role'=> 2
        ]);
        $etudiants = Prof::create([
            'matricule' =>$request->matricule,
            'nom' => $request->nom,
            'postnom' => $request->postnom,
            'prenom' => $request->prenom,
            'genre' => $request->genre,
            'fk_grade' => $request->fk_grade,
            'fk_user' => $user->id
        ]);
        event(new Registered($user));
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
