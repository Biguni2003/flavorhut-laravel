<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Order;

class AdminController extends Controller
{
    // ADMIN DASHBOARD

    public function index()
    {
        $foods = Food::count();

        $orders = Order::count();

        return view('admin', compact('foods', 'orders'));
    }

    // ADD FOOD PAGE

    public function addFood()
    {
        return view('addfood');
    }

    // STORE FOOD

    public function storeFood(Request $request)
    {
        $request->validate([

            'name' => 'required',

            'description' => 'required',

            'price' => 'required',

            'image' => 'required',

            'category' => 'required'

        ]);

        Food::create([

            'name' => $request->name,

            'description' => $request->description,

            'price' => $request->price,

            'image' => $request->image,

            'category' => $request->category

        ]);

        return redirect('/manage-foods')
                ->with('success', 'Food Added Successfully!');
    }

    // MANAGE FOODS

    public function manageFoods()
    {
        $foods = Food::latest()->get();

        return view('managefoods', compact('foods'));
    }

// EDIT FOOD PAGE

public function editFood($id)
{
    $food = Food::find($id);

    return view('editfood', compact('food'));
}


// UPDATE FOOD

public function updateFood(Request $request, $id)
{
    $food = Food::find($id);

    $food->update([

        'name' => $request->name,

        'description' => $request->description,

        'price' => $request->price,

        'image' => $request->image,

        'category' => $request->category

    ]);

    return redirect('/manage-foods')
            ->with('success', 'Food Updated Successfully!');
}

    // DELETE FOOD

    public function deleteFood($id)
    {
        $food = Food::find($id);

        if($food)
        {
            $food->delete();
        }

        return redirect('/manage-foods')
                ->with('success', 'Food Deleted Successfully!');
    }

    // MANAGE ORDERS

    public function manageOrders()
    {
        $orders = Order::latest()->get();

        return view('manageorders', compact('orders'));
    }

    // UPDATE ORDER STATUS

    public function updateStatus(Request $request)
    {
        $order = Order::find($request->id);

        if($order)
        {
            $order->status = $request->status;

            $order->save();
        }

        return redirect('/manage-orders')
                ->with('success', 'Order Status Updated!');
    }
}