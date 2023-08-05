<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Product;
use App\Models\ProductCategory;

use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::insertGetId([
            'product_name' => 'AC TCL MURAH',
            'price' => '12000000',
            'description' => 'Dinginkan ruanganmu dengan AC TCL',
            'created_at' => Carbon::now(),
        ]);
        ProductCategory::insert([
            'product_id' => $product,
            'category_id' => '8',
            'created_at' => Carbon::now()
        ]);
    }
}
