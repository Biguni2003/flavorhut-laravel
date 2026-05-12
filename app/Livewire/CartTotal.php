<?php

namespace App\Livewire;

use Livewire\Component;

class CartTotal extends Component
{
    public $cart = [];

    public function mount()
    {
        $this->cart = session()->get('cart', []);
    }

    public function increase($id)
    {
        $this->cart[$id]['quantity']++;

        session()->put('cart', $this->cart);
    }

    public function decrease($id)
    {
        if ($this->cart[$id]['quantity'] > 1) {

            $this->cart[$id]['quantity']--;

        }

        session()->put('cart', $this->cart);
    }

    public function getTotalProperty()
    {
        $total = 0;

        foreach ($this->cart as $item) {

            $total += $item['price'] * $item['quantity'];

        }

        return $total;
    }

    public function render()
    {
        return view('livewire.cart-total');
    }
}