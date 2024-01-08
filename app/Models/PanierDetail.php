<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanierDetail extends Model
{
    use HasFactory;
    public function paniers()
    {
        return $this->hasMany(panier::class);
    }
    public function products()
    {
        return $this->hasMany(product::class);
    }
}
