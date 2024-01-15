<?php

use App\Models\Categorie;
use App\Models\Product;

it('displays a list of products', function () {
    $prods = Categorie::listingProductsByCat(1);
    expect($prods)->toHaveCount(1);
});

it('check name Produit', function () {
    $prods = Categorie::listingProductsByCat(1);
    expect($prods[0]->name)->toBe('Produit 1');
});
