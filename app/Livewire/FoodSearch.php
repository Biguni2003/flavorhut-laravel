<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Food;

class FoodSearch extends Component
{
    public $search = '';

    public function render()
    {
        $foods = Food::where('name', 'like', '%' . $this->search . '%')->get();

        return view('livewire.food-search', [
            'foods' => $foods
        ]);
    }
}