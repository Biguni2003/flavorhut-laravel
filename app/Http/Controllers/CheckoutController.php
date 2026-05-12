<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    // CHECKOUT PAGE

    public function index()
    {
        $cart = session()->get('cart', []);

        $total = 0;

        foreach ($cart as $item)
        {
            $total += $item['price'] * $item['quantity'];
        }

        return view('checkout', compact('cart', 'total'));
    }

    // PLACE ORDER

    public function placeOrder(Request $request)
    {
        // VALIDATION

        $request->validate([

            'fullname' => 'required',

            'email' => 'required|email',

            'phone' => 'required',

            'address' => 'required',

            'payment' => 'required',

        ]);

        // GET CART

        $cart = session()->get('cart', []);

        // TOTAL

        $total = 0;

        foreach ($cart as $item)
        {
            $total += $item['price'] * $item['quantity'];
        }

        // SAVE ORDER

        $order = Order::create([

            'customer_name' => $request->fullname,

            'customer_email' => $request->email,

            'phone' => $request->phone,

            'address' => $request->address,

            'payment_method' => $request->payment,

            'total' => $total,

            'status' => 'Pending',

        ]);

        // SAVE ORDER ITEMS

        foreach ($cart as $item)
        {
            OrderItem::create([

                'order_id' => $order->id,

                'food_name' => $item['name'],

                'price' => $item['price'],

                'quantity' => $item['quantity'],

            ]);
        }

        // CLEAR CART

        session()->forget('cart');

        // REDIRECT

        return redirect('/ordersuccess');
    }
}