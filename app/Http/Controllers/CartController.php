<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Http\Controllers\Trait\ProductTrait;
use App\Http\Controllers\Trait\CategoryTrait;

class CartController extends Controller
{
    use CategoryTrait, ProductTrait;

    public function index()
    {
        // Model
        $categories = $this->getCategory();
        $products = $this->getProduct();

        // Get Session
        $carts = session()->get('cart', []);
        $user = Auth::user();

        $breadcrumbs = [
            [
                'active' => true,
                'url' => '#',
                'menu' => 'Cart',

            ]
        ];
        
        return view('cart', [
            'user' => $user,
            'categories' => $categories,
            'products' => $products,
            'carts' => $carts,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function addToCart(Product $product) 
    {
        $cart = session()->get('cart', []);

        // Check Cart Session
        if(isset($cart[$product->product_id])) {
            $cart[$product->product_id]['quantity']++;
        }else {
            $cart[$product->product_id] = [
                'product_id' => $product->product_id,
                'product_name' => $product->product_name,
                'thumbnail' => (isset($product->images[0])) ? Storage::disk('public')->url($product->images[0]->file_path.'/'.$product->images[0]->file_name) : '',
                'price' => $product->price,
                'quantity' => 1,
            ];
        }

        // Store to Session
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function removeFromCart(Product $product)
    {
        $cart = session()->get('cart', []);

        // Check Cart Session
        if(isset($cart[$product->product_id])) {
            unset($cart[$product->product_id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed from cart successfully!');
    }
}
