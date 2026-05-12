<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    // Foods Page

    public function foods(Request $request)
    {
        $search = $request->search;

        $foods = Food::query()

            ->when($search, function ($query) use ($search) {

                $query->where('name', 'like', "%{$search}%");

            })

            ->get();

        return view('foods', compact('foods', 'search'));
    }

    // Food Details

    public function foodDetails($category)
    {
        $items = Food::where('category', $category)->get();

        return view('fooddetails', compact('items', 'category'));
    }

    // Beverages

    public function beverages()
{
    $drinks = Food::where('category', 'beverages')->get();

    return view('beverages', compact('drinks'));
}
}