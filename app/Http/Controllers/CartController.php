<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class CartController extends Controller
{
    // CART PAGE

    public function index()
    {
        $cart = session()->get('cart', []);

        return view('cart', compact('cart'));
    }

    // ADD TO CART

    public function add($id)
    {
        $food = Food::findOrFail($id);

        $cart = session()->get('cart', []);

        $cart[] = [

            'name' => $food->name,
            'price' => $food->price,
            'image' => $food->image,
            'description' => $food->description,
            'quantity' => 1

        ];

        session()->put('cart', $cart);

        return back()->with('success', 'Item Added To Cart Successfully');
    }

    // INCREASE QUANTITY

    public function increase($index)
    {
        $cart = session()->get('cart', []);

        $cart[$index]['quantity']++;

        session()->put('cart', $cart);

        return redirect('/cart');
    }

    // DECREASE QUANTITY

    public function decrease($index)
    {
        $cart = session()->get('cart', []);

        if($cart[$index]['quantity'] > 1)
        {
            $cart[$index]['quantity']--;
        }

        session()->put('cart', $cart);

        return redirect('/cart');
    }

    // DELETE ITEM

    public function delete($index)
    {
        $cart = session()->get('cart', []);

        unset($cart[$index]);

        $cart = array_values($cart);

        session()->put('cart', $cart);

        return redirect('/cart');
    }
}