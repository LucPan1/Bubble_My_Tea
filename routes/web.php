<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthLogOutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

// accueil page once the user logged in
Route::get('/accueil', [ConnectionController::class, 'showUserLoggedIn'])->name('accueil');
// Route::get('/accueilData', [ConnectionController::class, 'showProduct']);


// accueil page
Route::get('/home', function () {
    return view('home');
});

// Route::get('/connection', function () {
//     return view('connection');
// });

// connection page
Route::get('/connection', [ConnectionController::class, "show1"]);

// Route::get('/connection', [ConnectionController::class, "showUsers"]);

Route::post('/connectionPOST', [ConnectionController::class, "connection_login"])->name('connexion_post_user');

// Route::resource('post', PostController::class);


// register page
Route::get('/register', [UserController::class, 'showRegistrationForm']);

Route::post('/registerPOST', [UserController::class, "ajouter_users"]);


// Route::get('/profil', [ProfilController::class, 'afficheProfil'])->name('profil');


// product page
Route::get('/product', [ProductController::class, 'showProduct']);

Route::post('/addProduct', [ProductController::class, 'ajouter_produit']);

Route::get('/products/{id}/edit', [AdminController::class, 'editProduct'])->name('products.edit');

Route::put('/product/{id}/update', [AdminController::class, 'updateProduct'])->name('product.update');

Route::delete('/product/{id}/delete', [AdminController::class, 'showDeleteProduct'])->name('products.delete');

Route::delete('/product/{id}/delete', [AdminController::class, 'deleteProduct'])->name('product.delete');



// admin page
Route::get('/admin', [AdminController::class, "showAdmin"]);

// Route::get('/adminProduct', [AdminController::class, "showProduct"]);

Route::post('/adminPOST', [AdminController::class, "connection_login_admin"])->name('connexion_post_admin');

Route::post('/addAdmin', [AdminController::class, "add_admin"]);

Route::get('/adminPage', [AdminController::class, "showProduct"]);


// Route::get('/update', [AdminController::class, 'updateProduct'])->name('adminPage.admin');






// logout page
Route::get('/userLogout', [AuthLogOutController::class, "UserLogout"])->name('user.logout');
Route::get('/adminLogout', [AuthLogOutController::class, "AdminLogout"])->name('admin.logout');







