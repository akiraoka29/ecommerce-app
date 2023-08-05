<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Http\Controllers\Trait\ProductTrait;
use App\Http\Controllers\Trait\CategoryTrait;
use App\Http\Controllers\Trait\UserTrait;
use App\Http\Controllers\Trait\CheckoutTrait;

use Carbon\Carbon;
use DB;
use Helper;

class CheckoutController extends Controller
{
    use CategoryTrait, ProductTrait, UserTrait, CheckoutTrait;

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
                'menu' => 'Checkout',

            ]
        ];
        
        return view('checkout', [
            'user' => $user,
            'categories' => $categories,
            'products' => $products,
            'carts' => $carts,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function checkout(Request $request)
    {
        try { 
            DB::beginTransaction();

            // Get Auth
            $user = Auth::user();

            if(!$user) {
                return redirect()->back();
            }

            // Get Request Value
            $newAccount = $request->is_new_account;
            $firstName = $request->first_name;
            $lastName = $request->last_name;
            $email = $request->email;
            $password = $request->password;
            $country = $request->country;
            $province = $request->province ?? 'Jawa Barat';
            $city = $request->city;
            $district = $request->district ?? 'Test';
            $postalCode = $request->postal_code;
            $address = $request->address_line_1;
            $notes = '';

            // Check newAccount is Checked
            if($newAccount == true) {
                $this->createUser([
                    "name" => $firstName.' '.$lastName,
                    "email" => $email,
                    "password" => $password,
                ]);
            }

            // Get Session
            $carts = session()->get('cart', []);

            // Sum Total Price
            $grandTotal = array_sum(array_column($carts, 'price'));

            // Set Data
            $data = [
                'user_id' => $user->id,
                'invoice_number' => Helper::generateInvoiceNumber(),
                'order_date' => Carbon::now()->format('Y-m-d'),
                'total_amount' => $grandTotal,
                'shipping_address' => $address,
                'zip_code' => $postalCode,
                'country' => $country,
                'province' => $province,
                'city' => $city,
                'district' => $district,
                'notes' => $notes,
                'status' => '1',
                'order_items' => $carts
            ];

            // Checkout Order
            $this->makeOrder($data);

            // Check Cart Session
            $carts = session()->get('cart', []);
            session()->flush();
            session()->put('cart', []);

            DB::commit();
        } catch(Exception $e) {
            DB::rollback();
        }
    }
}
