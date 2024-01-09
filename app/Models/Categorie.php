<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    // hasMany => nom relation au pluriel
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
