<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Food;

class FoodCounter extends Component
{
    public function render()
    {
        return view('livewire.food-counter', [
            'count' => Food::count()
        ]);
    }
}