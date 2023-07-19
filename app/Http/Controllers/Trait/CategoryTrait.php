<?php

namespace App\Http\Controllers\Trait;

use App\Models\Category;

use App\Enums\GlobalEnum;

use Carbon\Carbon;

trait CategoryTrait
{
    public function getCategory()
    {
        $category = Category::all();

        return $category;
    }

    public function addCategory($form)
    {
        $create = Category::create([
            'category_name' => $form['name'],
            'created_at' => Carbon::now(GlobalEnum::timezone)
        ]);

        return $create;
    }
}