<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\ProductImage;

use Carbon\Carbon;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductImage::insert([
            'product_id' => 1,
            'file_name' => '1.jpg',
            'file_path' => 'uploads/product/1',
            'created_at' => Carbon::now()
        ]);
    }
}
