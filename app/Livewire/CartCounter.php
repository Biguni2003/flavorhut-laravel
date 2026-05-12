<?php

namespace App\Livewire;

use Livewire\Component;

class CartCounter extends Component
{
    public function render()
    {
        $cart = session()->get('cart', []);

        $count = count($cart);

        return view('livewire.cart-counter', [
            'count' => $count
        ]);
    }
}