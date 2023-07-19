<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['category_name' => 'Smartphones', 'slug' => 'smartphones'],
            ['category_name' => 'Laptops', 'slug' => 'laptops'],
            ['category_name' => 'Tablets', 'slug' => 'tablets'],
            ['category_name' => 'TV', 'slug' => 'tv'],
            ['category_name' => 'Kamera', 'slug' => 'kamera'],
            ['category_name' => 'Headphones', 'slug' => 'headphones'],
            ['category_name' => 'Speakers', 'slug' => 'speakers'],
            ['category_name' => 'Perabotan Rumah', 'slug' => 'perabotan-rumah'],
        ];

        Category::insert($categories);
    }
}
