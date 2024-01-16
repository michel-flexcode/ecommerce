<?php

use App\Models\Categorie;
use App\Models\Product;

it('displays a list of products', function () {
    $prods = Categorie::listingProductsByCat(1);
    expect($prods)->toHaveCount(1);
    expect($prods[0]->name)->toBe('Produit 1');
});

it('displays a list of categorie inexisting', function () {
    $prods = Categorie::listingProductsByCat(5000000);
    expect($prods)->toBe(null);
});

it('check name Produit existing', function () {
    $prods = Product::getProductByName('Produit 2');
    expect($prods)->toHaveCount(1);
    expect($prods[0]->name)->toBe('Produit 2');
});

it('checks name non exsisting Produit', function () {
    $prods = Product::getProductByName('Produit abc');
    expect($prods)->toHaveCount(0);
});

test('Vérifie la récupération des produits par prix', function () {
    $products = Product::getProductByPrice('20.00');
    expect($products[0]->name)->toBe('Produit 1');
    expect($products[1]->name)->toBe('Produit 2');
    expect($products[0]->price)->toBeLessThan(17);
    expect($products[1]->price)->toBeLessThan(21);
});
