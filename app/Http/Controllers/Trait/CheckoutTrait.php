<?php

namespace App\Http\Controllers\Trait;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;

use App\Enums\GlobalEnum;

use Carbon\Carbon;

trait CheckoutTrait
{
    public function makeOrder($form)
    {
        $order = Order::insertGetId([
            'user_id' => $form['user_id'],
            'invoice_number' => $form['invoice_number'],
            'order_date' => $form['order_date'],
            'total_amount' => $form['total_amount'],
            'shipping_address' => $form['shipping_address'],
            'zip_code' => $form['zip_code'],
            'country' => $form['country'],
            'province' => $form['province'],
            'city' => $form['city'],
            'district' => $form['district'],
            'notes' => $form['notes'],
            'status' => $form['status'],
            'created_at' => Carbon::now(),
        ]);
        // Add Items
        foreach($form['order_items'] as $item) {
            $orderItem = OrderItem::create([
                'order_id' => $order,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'created_at' => Carbon::now(),
            ]);
        }
    }

    public function makePayment($payment)
    {
        Payment::create([
            'order_id' => $payment['order_id'],
            'payment_method' => $payment['payment_method'],
            'amount' => $payment['amount'],
            'payment_date' => $payment['payment_date'],
            'created_at' => Carbon::now(),
        ]);
    }
}