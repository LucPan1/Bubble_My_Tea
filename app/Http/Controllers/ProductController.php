<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProductController extends Controller
{
    public function showProduct() {
        $data = Produit::all();
        return view("product", compact('data'));
    }
    public function ajouter_produit(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required', 
            'price' => 'required',
        ]);
       
        $product = new Produit();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        if($request->hasfile('picture')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/product/', $filename);
            $product->picture = $filename;
        }
        else {
            return $request;
            $product->image = '';
        }

        $product -> save();

        return redirect('/product')->with('status', "Le produit à bien été ajouté avec succès");
    }
}
