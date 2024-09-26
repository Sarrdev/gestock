<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //définir les colonnes à la base de donnée
    protected $filliable = ['name', 'price', 'quantity'];
}
