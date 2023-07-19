<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Trait\CategoryTrait;

class HomeController extends Controller
{
    use CategoryTrait;

    public function index()
    {
        $categories = $this->getCategory();

        return view('index', [
            'categories' => $categories
        ]);
    }
}
