<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Trait\ProductTrait;
use App\Http\Controllers\Trait\CategoryTrait;
use App\Http\Controllers\Trait\BannerTrait;

class HomeController extends Controller
{
    use CategoryTrait, ProductTrait, BannerTrait;

    public function index()
    {
        // Model
        $categories = $this->getCategory();
        $products = $this->getProduct();
        $banners = $this->getBanner();

        // Get Session
        $carts = session()->get('cart', []);
        $user = Auth::user();

        return view('index', [
            'categories' => $categories,
            'products' => $products,
            'banners' => $banners,
            'carts' => $carts,
            'user' => $user
        ]);
    }
}
