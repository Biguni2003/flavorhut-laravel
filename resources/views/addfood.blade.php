@extends('layouts.app')

@section('content')

<section class="bg-orange-50 min-h-screen py-20">

<div class="max-w-4xl mx-auto px-6">

<div class="bg-white rounded-3xl shadow-2xl p-12">

<h1 class="text-6xl font-bold text-orange-600 text-center mb-14">

Add New Food

</h1>

<form method="POST" action="/store-food">

@csrf

<!-- FOOD NAME -->

<div class="mb-8">

<label class="block text-xl font-semibold mb-3">

Food Name

</label>

<input type="text"
       name="name"
       required
       class="w-full border border-gray-300
              rounded-2xl p-5 text-lg">

</div>

<!-- DESCRIPTION -->

<div class="mb-8">

<label class="block text-xl font-semibold mb-3">

Description

</label>

<textarea name="description"
          rows="5"
          required
          class="w-full border border-gray-300
                 rounded-2xl p-5 text-lg"></textarea>

</div>

<!-- PRICE + CATEGORY -->

<div class="grid grid-cols-1 md:grid-cols-2 gap-8">

<div>

<label class="block text-xl font-semibold mb-3">

Price

</label>

<input type="number"
       name="price"
       required
       class="w-full border border-gray-300
              rounded-2xl p-5 text-lg">

</div>

<div>

<label class="block text-xl font-semibold mb-3">

Category

</label>

<select name="category"
        class="w-full border border-gray-300
               rounded-2xl p-5 text-lg">

<option value="burger">Burger</option>
<option value="pizza">Pizza</option>
<option value="friedrice">Fried Rice</option>
<option value="desserts">Desserts</option>
<option value="beverages">Beverages</option>

</select>

</div>

</div>

<!-- IMAGE -->

<div class="mt-8">

<label class="block text-xl font-semibold mb-3">

Image Name

</label>

<input type="text"
       name="image"
       placeholder="example.jpg"
       required
       class="w-full border border-gray-300
              rounded-2xl p-5 text-lg">

<p class="text-gray-500 mt-2">

Put image file inside public/images folder

</p>

</div>

<!-- BUTTON -->

<button type="submit"
        class="mt-12 bg-orange-500 hover:bg-orange-600
               text-white px-12 py-5 rounded-2xl
               text-2xl font-bold transition">

Add Food

</button>

</form>

</div>

</div>

</section>

@endsection