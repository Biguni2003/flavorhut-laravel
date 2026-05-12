<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;

class OrderStatus extends Component
{
    public function render()
    {
        $order = Order::latest()->first();

        return view('livewire.order-status', [
            'order' => $order
        ]);
    }
}