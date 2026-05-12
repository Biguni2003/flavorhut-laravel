@extends('layouts.app')

@section('content')

<section class="bg-orange-50 min-h-screen py-20">

<div class="max-w-7xl mx-auto px-6">

<!-- TITLE -->

<div class="text-center mb-16">

<h1 class="text-6xl font-extrabold text-orange-600">

Admin Dashboard

</h1>

<p class="text-gray-600 text-xl mt-4">

Manage foods, customer orders and system data.

</p>

</div>

<!-- STATS -->

<div class="grid grid-cols-1 md:grid-cols-3 gap-10">

<!-- TOTAL FOODS -->

<div class="bg-white rounded-3xl shadow-xl p-10 border-l-8 border-orange-500">

<p class="text-gray-500 text-xl font-semibold">

Total Foods

</p>

<h2 class="text-6xl font-extrabold text-orange-500 mt-6">

{{ $foods }}

</h2>

</div>

<!-- TOTAL ORDERS -->

<div class="bg-white rounded-3xl shadow-xl p-10 border-l-8 border-green-500">

<p class="text-gray-500 text-xl font-semibold">

Total Orders

</p>

<h2 class="text-6xl font-extrabold text-green-500 mt-6">

{{ $orders }}

</h2>

</div>

<!-- ADMIN -->

<div class="bg-white rounded-3xl shadow-xl p-10 border-l-8 border-black">

<p class="text-gray-500 text-xl font-semibold">

Admin User

</p>

<h2 class="text-4xl font-bold text-gray-800 mt-6">

{{ Auth::user()->name }}

</h2>

</div>

</div>

<!-- ACTION BUTTONS -->

<div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-16">

<!-- ADD FOOD -->

<a href="/add-food"
   class="bg-orange-500 hover:bg-orange-600
          text-white rounded-3xl p-12
          shadow-xl transition duration-300
          hover:scale-105 text-center">

<div class="text-5xl mb-5">

🍔

</div>

<h2 class="text-3xl font-bold">

Add New Food

</h2>

<p class="mt-4 text-orange-100">

Add foods and beverages to the menu.

</p>

</a>

<!-- MANAGE FOODS -->

<a href="/manage-foods"
   class="bg-gray-900 hover:bg-black
          text-white rounded-3xl p-12
          shadow-xl transition duration-300
          hover:scale-105 text-center">

<div class="text-5xl mb-5">

📋

</div>

<h2 class="text-3xl font-bold">

Manage Foods

</h2>

<p class="mt-4 text-gray-300">

Edit and remove existing food items.

</p>

</a>

<!-- MANAGE ORDERS -->

<a href="/manage-orders"
   class="bg-green-500 hover:bg-green-600
          text-white rounded-3xl p-12
          shadow-xl transition duration-300
          hover:scale-105 text-center">

<div class="text-5xl mb-5">

🛒

</div>

<h2 class="text-3xl font-bold">

Manage Orders

</h2>

<p class="mt-4 text-green-100">

View customer orders and update status.

</p>

</a>

</div>

</div>

</section>

@endsection