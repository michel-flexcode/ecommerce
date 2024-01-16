<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advise extends Model
{
    use HasFactory;

    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
