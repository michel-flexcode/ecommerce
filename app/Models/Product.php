<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function panierDetails()
    {
        return $this->hasMany(PanierDetail::class);
    }
    public function advise()
    {
        return $this->hasMany(Advise::class);
    }

    public static function getProductByName(string $name1)
    {
        return Product::where('name', $name1)->get();
    }
    public static function getProductByPrice(float $price)
    {
        return Product::where('price', $price)->get();
    }
}
