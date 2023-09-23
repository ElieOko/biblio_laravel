<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Section;
use App\Models\Etudiant;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Password;
;

class EtudiantController extends Controller
{
    public function index(){
        $etudiants= Etudiant::All();
        return view('student.all',compact('etudiants'));
    }
    public function create(){
        //view('sectionAdmin.AjoutEtudiant');
        $sections = Section::all();
        $promotions = Promotion::all();
        return view('student.create',compact('sections', 'promotions'));
    }

    public function store(Request $request)
    {   
        
        $request->validate([
            'matricule' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed',],
            'nom' => 'required',
            'postnom' => 'required',
            'prenom' => 'required|string',
            'genre' => 'required',
        ]);
        $username = $request->nom . $request->postnom;
        // dd("bug");
        $user = User::create([
            'name' => $username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'fk_role'=> 1
        ]);
        $id = $user->id;
            # code...
            $etudiants = Etudiant::create([
                'matricule' =>$request->matricule,
                'nom' => $request->nom,
                'postnom' => $request->postnom,
                'prenom' => $request->prenom,
                'genre' => $request->genre,
                'fk_section' => $request->fk_section,
                'fk_promotion' => $request->fk_promotion,
                'fk_user' => $id
            ]);
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function detait($id_student)
    {
        # code...
        return view('student.detail');
    }
    public function update(Request $request,$id_student)
    {
        # code...
    }
    public function publication(Request $request)
    {
        # code...
    }
    public function publication_page()
    {
        return view('student.publication');
    }
}
