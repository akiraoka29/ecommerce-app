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
            ['category_name' => 'Smartphones'],
            ['category_name' => 'Laptops'],
            ['category_name' => 'Tablets'],
            ['category_name' => 'TV'],
            ['category_name' => 'Kamera'],
            ['category_name' => 'Headphones'],
            ['category_name' => 'Speakers'],
            ['category_name' => 'Perabotan Rumah'],
        ];

        Category::insert($categories);
    }
}
