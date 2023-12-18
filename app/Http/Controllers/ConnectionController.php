<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User; 


class ConnectionController extends Controller
{
    
    public function show1()
    {
        return view("connection");
        
    }
    
    // public function showProduct() {
    //     $data = Produit::all();
    //     return view("accueil", compact('data'));
    // }

    // public function showUsers() {
    //     $data = User::all();
    //     return view("product", compact('data'));
    // }
    public function showUserLoggedIn(){
        return view('accueil');
    }
    
    public function connection_login(Request $request){
      

      $request->validate([
            'email' => 'email|required',
            'password' => 'required',
        ]);
       
        $user = User::where('email',$request->input('email'))->first();   
        if($user){
            if(Hash::check($request->input('password'),$user->password)){
                $request->session()->put('user',$user);
                return redirect('/accueil');
            }else{
                return back()->with('status','password or email dont matched');
            }
        }else{
            return back()->with('status','User or email incorrect');
        }
    }
}
