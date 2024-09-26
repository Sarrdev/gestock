<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('',[HomeController::class,'index']);

Route::get('produit',[HomeController::class,'produit']);


//Affichage des listes de produits
Route::get('/products', 'App\http\Controllers\ProductController@index');

//Affichage du formulaire pour ajouter un nouveau produit
Route::get('/products/create', 'App\http\Controllers\ProductController@create')->name('products.create');

//Enregistrement des produits
Route::post('/products', 'App\http\Controllers\ProductController@store')->name('product.store');

// Afficher le formulaire d'édition d'un produit
Route::get('/products/edit/{id}', 'App\Http\Controllers\ProductController@edit')->name('products.edit');

// Editer un produit
Route::post('/products/update/{id}', 'App\Http\Controllers\ProductController@update')->name('products.update');

//Supprimer un produit
Route::get('/products/delete/{id}', 'App\Http\Controllers\ProductController@delete')->name('products.delete');

Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
