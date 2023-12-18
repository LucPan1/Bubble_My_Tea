<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showRegistrationForm() {
        return view("posts.create");
    }

    public function ajouter_users(Request $request) {
        $request->validate([
            'name' => 'required',
            'prenom' => 'required', 
            'email' => 'required',
            'password' => 'required',
        ]);

        $users = new User();
        $users->name = $request->input('name');
        $users->prenom = $request->input('prenom');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->adresse = $request->input('adresse');
        $users->tel = $request->input('tel');


        $users -> save();

        return redirect('/connection')->with('status', "L'users à bien été ajouté avec succès");

    }
}
