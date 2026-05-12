@extends('layouts.app')

@section('content')

<section class="py-20 flex-grow bg-orange-50 min-h-screen">

<div class="max-w-7xl mx-auto px-6">

<h1 class="text-5xl font-bold text-orange-600 text-center mb-16">

Checkout

</h1>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

<!-- LEFT SIDE -->

<div class="lg:col-span-2">

<form action="/place-order"
      method="POST"
      class="bg-white p-10 rounded-3xl shadow-xl">

@csrf

<h2 class="text-3xl font-bold text-gray-800 mb-10">

Billing Details

</h2>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8">

<div>

<label class="block text-lg font-semibold mb-3">

Full Name

</label>

<input type="text"
       name="fullname"
       required
       class="w-full border border-gray-300
              rounded-2xl p-4 outline-none
              focus:border-orange-500">

</div>

<div>

<label class="block text-lg font-semibold mb-3">

Phone Number

</label>

<input type="text"
       name="phone"
       required
       class="w-full border border-gray-300
              rounded-2xl p-4 outline-none
              focus:border-orange-500">

</div>

</div>

<div class="mt-8">

<label class="block text-lg font-semibold mb-3">

Email Address

</label>

<input type="email"
       name="email"
       required
       class="w-full border border-gray-300
              rounded-2xl p-4 outline-none
              focus:border-orange-500">

</div>

<div class="mt-8">

<label class="block text-lg font-semibold mb-3">

Delivery Address

</label>

<textarea rows="5"
          name="address"
          required
          class="w-full border border-gray-300
                 rounded-2xl p-4 outline-none
                 focus:border-orange-500"></textarea>

</div>

<div class="mt-8">

<label class="block text-lg font-semibold mb-3">

Payment Method

</label>

<select name="payment"
        class="w-full border border-gray-300
               rounded-2xl p-4 outline-none
               focus:border-orange-500">

<option>Cash On Delivery</option>

<option>Card Payment</option>

</select>

</div>

<div class="mt-10">

<button type="submit"
class="bg-orange-500 hover:bg-orange-600
text-white px-10 py-4 rounded-2xl text-xl">

Place Order

</button>

</div>

</form>

</div>

<!-- RIGHT SIDE -->

<div>

<div class="bg-white rounded-3xl shadow-xl p-8 sticky top-10">

<h2 class="text-3xl font-bold text-gray-800 mb-8">

Order Summary

</h2>

<div class="space-y-6">

@foreach($cart as $item)

@php

$subtotal = $item['price'] * $item['quantity'];

@endphp

<div class="flex gap-4 border-b pb-5">

<img src="{{ asset('images/' . $item['image']) }}"
     class="w-24 h-24 rounded-2xl object-cover">

<div class="flex-1">

<h3 class="text-xl font-bold text-gray-800">

{{ $item['name'] }}

</h3>

<p class="text-gray-500 mt-2 text-sm">

{{ $item['description'] }}

</p>

<p class="text-gray-700 mt-2 font-semibold">

Quantity:
{{ $item['quantity'] }}

</p>

<p class="text-orange-500 font-bold mt-2 text-lg">

Rs. {{ $subtotal }}

</p>

</div>

</div>

@endforeach

</div>

<!-- TOTAL -->

<div class="mt-10 border-t pt-6">

<div class="flex justify-between items-center">

<h2 class="text-3xl font-bold">

Total

</h2>

<p class="text-3xl font-bold text-orange-500">

Rs. {{ $total }}

</p>

</div>

</div>

</div>

</div>

</div>

</div>

</section>

@endsection