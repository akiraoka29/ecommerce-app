<?php

namespace App\Http\Controllers\Trait;

use App\Models\Product;
use App\Enums\GlobalEnum;

trait ProductTrait
{
    public function getProduct()
    {
        $product = Product::all();

        return $product;
    }

    public function addProduct($form)
    {
        $product = Product::create([
            'product_name' => $form['product_name'],
            'category_id' => $form['category_id'],
            'price' => $form['price'],
            'description' => $form['description'],
            'file_name' => $form['file_name'],
            'file_path' => $form['file_path'],
            'created_at' => Carbon::now(GlobalEnum::timezone),
        ]);

        return $product;
    }
}