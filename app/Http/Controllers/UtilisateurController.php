<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    //
    public function createUser(Request $request)
    {
        # code...
        $fields = $request->validate([
            'username' => 'required|string',
            'password'=>'required|string',
        ]);
        User::create([
            'username' => $fields['username'],
            'password'=>['password'],
        ]);

    }
    public function authUser(){
        try {
            $fields = $request->validate([
                'username' => 'required|string',
                'password'=>'required|string',
            ]);
            $user = User::where('username',$fields['username'])->first();
            if(!$user || !Hash::check($fields['password'], $user->password)){
                die("Utilisateur non valide");
            }
            
        } catch (\Throwable $th) {
            die($th->getMessage());
        }
    }
}
