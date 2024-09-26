<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //Méthode pour afficher la liste des produits
    public function index()
    {   
        //Recuperer tout les produits dans la base de donnée
        Product::where('name','=','avocat')->update(['price'=>200]);
        $products = Product::all();

        return view("products.index", ['produits' =>$products]);
    }

    //Methode pour afficher la vue create.blade.php
    public function create()
    {
       return view('products.create');
    }
    
    //Enregistrement des produits
    public function store(Request $request)
    {
        $produit = new Product;
        $produit->name = $request->name;
        $produit->price = $request->price;
        $produit->quantity = $request->quantity;
        $produit->save();


        $products = Product::all();
        return view("products.index", ['produits' =>$products]);
    }


    //Afficher la vue edit.blade.php 
        public function edit($id)
    {
        $product = Product::find($id);
        return view("products.edit", ['produit' => $product]);
    }

    //Modifier un produit
        public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->update();

        $products = Product::all();
        return view("products.index", ['produits' =>$products]);


    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        $products = Product::all();
        return view("products.index", ['produits' =>$products]);
    }
    

}
