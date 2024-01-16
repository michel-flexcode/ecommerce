<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public static function getSellerSales(string $name1)
    {
        return Product::where('name', $name1)->get();
    }
}
