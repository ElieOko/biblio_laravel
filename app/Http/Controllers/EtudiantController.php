<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sujet;
use App\Models\Section;
use App\Models\Etudiant;
use App\Models\Categorie;
use App\Models\Promotion;
use Illuminate\Http\Request;
use App\Models\TravailScientifique;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Password;
;

class EtudiantController extends Controller
{
    public function index(){
        $etudiants= Etudiant::All();
        return view('student.all',compact('etudiants'));
    }
    public function create(){
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
            'role' => ''
        ]);
        $username = $request->nom ." ". $request->postnom;
        $user = User::create([
            'name' => $username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role'=> 1
        ]);
        $id = $user->id;
            # code...
            $etudiants = Etudiant::create([
                'matricule' =>$request->matricule,'nom' => $request->nom,'postnom' => $request->postnom,'prenom' => $request->prenom,'genre' => $request->genre,
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
            $request->validate([
                'file' => 'required|file|mimes:pdf,doc,docx|max:10302048',
            ]);
            $original_name = $request->file('file')->getClientOriginalName();
            if($request->hasFile('file')) {
                $path = $request->file->storeAs("public/", $original_name  );
                $student = (Etudiant::where("fk_user",Auth::user()->id)->get())[0]->id;
                $travail = TravailScientifique::create([
                    'annee' => date('Y'),
                    'nom' => $request->sujet,
                    'description' => $request->description,
                    'fichier' => $original_name,
                    'autorisation' => true,
                    'fk_etudiant' => $student,
                    'prof' => $request->nom,
                    'fk_categorie' => $request->categorie
                ]);

                $all = TravailScientifique::all();
                $allStudent = new Etudiant();
                $all_categorie =  Categorie::all();
                return redirect('/livre')->with("all",$all)->with("allStudent",$allStudent)->with("allCategorie",$all_categorie) ;
            }
        
    }
    public function livre()
    {
        $all = TravailScientifique::all();
        $allStudent = new Etudiant();
        $categorie = new Categorie();
        return view('livre',compact('all', 'allStudent','categorie'));
    }
    public function publication_page()
    {
        $all_categorie =  Categorie::all();
        return view('student.publication')->with("all_categorie",$all_categorie);
    }
}
