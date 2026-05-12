@extends('layouts.app')

@section('content')

<section class="bg-orange-50 min-h-screen py-20">

<div class="max-w-6xl mx-auto px-6">

<h1 class="text-6xl font-bold text-orange-600 text-center mb-16">

Manage Orders

</h1>

@if(session('success'))

<div class="bg-green-100 text-green-700
            p-5 rounded-2xl mb-10 text-xl">

    {{ session('success') }}

</div>

@endif

<div class="space-y-10">

@foreach($orders as $order)

<div class="bg-white rounded-3xl shadow-xl p-10">

<div class="flex justify-between items-start mb-8">

<div>

<h2 class="text-4xl font-bold text-gray-800">

{{ $order->customer_name }}

</h2>

<p class="text-gray-500 text-xl mt-2">

{{ $order->phone }}

</p>

<p class="text-gray-500 text-xl">

{{ $order->customer_email }}

</p>

</div>

<div class="text-right">

<h2 class="text-4xl font-bold text-orange-500">

Rs. {{ $order->total }}

</h2>

<p class="text-gray-500 mt-2 text-lg">

{{ $order->payment_method }}

</p>

</div>

</div>

<div class="bg-orange-50 rounded-2xl p-8 mb-8">

<h3 class="text-2xl font-bold mb-3">

Delivery Address

</h3>

<p class="text-lg text-gray-700">

{{ $order->address }}

</p>

</div>

<div class="flex flex-col md:flex-row
            md:items-center md:justify-between gap-6">

<div>

<h3 class="text-2xl font-bold mb-2">

Current Status

</h3>

<p class="text-orange-500 text-2xl font-bold">

{{ $order->status }}

</p>

</div>

<form action="/update-status"
      method="POST"
      class="flex gap-4 items-center">

@csrf

<input type="hidden"
       name="id"
       value="{{ $order->id }}">

<select name="status"
        class="border border-gray-300
               rounded-xl px-5 py-3 text-lg">

<option value="Pending">

Pending

</option>

<option value="Preparing">

Preparing

</option>

<option value="Delivered">

Delivered

</option>

</select>

<button type="submit"
        class="bg-green-500 hover:bg-green-600
               text-white px-8 py-3 rounded-xl text-lg">

Update Status

</button>

</form>

</div>

</div>

@endforeach

</div>

</div>

</section>

@endsection