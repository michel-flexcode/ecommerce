<?php

use App\Models\Categorie;
use App\Models\Product;

it('displays a list of products', function () {
    $prods = Categorie::listingProductsByCat(1);
    expect($prods)->toHaveCount(1)
});

it('displays product details', function () {
    // Assuming you have a specific product in the database
    $product = Product::factory()->create();

    // Visiting the route that displays the details of a specific product
    $response = $this->get('/products/' . $product->id);

    // Asserting that the response has a successful status code
    $response->assertStatus(200);

    // Asserting that the response contains the details of the product
    $response->assertSee($product->name);
    $response->assertSee($product->description);
    $response->assertSee((string)$product->price); // Assuming 'price' is a numeric field
    // ... add more assertions based on your product attributes
});

// You can add more tests as needed for product creation, updating, and deletion based on your application's functionality.
