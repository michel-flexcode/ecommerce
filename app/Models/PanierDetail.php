<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanierDetail extends Model
{
    use HasFactory;
    // hasMany => nom relation au pluriel

    public function paniers()
    {
        return $this->hasMany(panier::class);
    }
    // hasMany => nom relation au pluriel

    public function products()
    {
        return $this->hasMany(product::class);
    }
}
