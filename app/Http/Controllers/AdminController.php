<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin; 
use App\Models\Produit; 


class AdminController extends Controller
{
    public function showAdmin() {
        // $data = Admin::all();
    return view("admin.adminConnection"/*, compact('data')*/);
    }

    public function showProduct() {
        $dataProductAdmin = Produit::all();
        return view("adminPage.admin", compact('dataProductAdmin'));
    }

    public function editProduct(string $id) {
        $dataProductAdmin = Produit::find($id);
        return view("products.edit", compact('dataProductAdmin'));
    }

    public function showDeleteProduct(string $id) {
        $dataProductAdmin = Produit::find($id);
        return view("products.delete", compact('dataProductAdmin'));
    }

    public function deleteProduct(string $id) {
        $dataProductAdmin = Produit::findOrFail($id);
        $dataProductAdmin -> delete();
    }


    public function updateProduct(Request $request, string $id) {
        $dataProductAdmin = Produit::find($id);

    // Mettre à jour les champs du produit avec les données du formulaire
    $dataProductAdmin->update($request->all());

    // Vérifier si un nouveau fichier a été téléchargé
    if ($request->hasFile('picture')) {
        $path = public_path().'/upload/product/';
        
        // Supprimer le fichier existant s'il y en a un
        if ($dataProductAdmin->picture != '' && $dataProductAdmin->picture != null) {
            $file_old = $path . $dataProductAdmin->picture;
            // unlink($file_old);
        }

        // Téléchargez le nouveau fichier
        $file = $request->file('picture');
        $filename = $file->getClientOriginalName();
        $file->move($path, $filename);

        // Mettre à jour le champ 'file' dans la table avec le nouveau nom de fichier
        $dataProductAdmin->update(['picture' => $filename]);
       }

        return redirect("/adminPage")->with('success', 'product updated successfully');
    }


    public function add_admin(Request $request) {
        $request->validate([
            'firstname' => 'required',
            'surname' => 'required',
            'username' => 'required', 
            'password' => 'required',
        ]);
       
        $admin = new Admin();
        $admin->firstname = $request->input('firstname');
        $admin->surname = $request->input('surname');
        $admin->username = $request->input('username');
        $admin->password = $request->input('password');

        $admin -> save();

        return redirect('/admin')->with('status', "Admin à bien été ajouté avec succès");
    }
    


    public function connection_login_admin(Request $request){
        
        $request->validate([
              'username' => 'required',
              'password' => 'required',
          ]);
        //    dd($request);
         
          $admin = Admin::where('username',$request->input('username'))->first();   
          if($admin){
              if(Hash::check($request->input('password'),$admin->password)){
                  $request->session()->put('admin',$admin);
                  return redirect('/adminPage');
              }else{
                  return back()->with('status','password or email dont matched');
              }
          }else{
              return back()->with('status','User or email incorrect');
          }
      }

      public function showAdminPage() {
        return view('adminPage.admin');
    }

}


