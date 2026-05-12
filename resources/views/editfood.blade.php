@extends('layouts.app')

@section('content')

<section class="py-20 bg-orange-50 min-h-screen">

<div class="max-w-4xl mx-auto px-6">

<div class="bg-white rounded-3xl shadow-xl p-10">

<h1 class="text-5xl font-bold text-orange-600 text-center mb-12">

Edit Food

</h1>

<form method="POST"
      action="/update-food/{{ $food->id }}">

@csrf

<div class="mb-8">

<label class="block text-lg font-semibold mb-3">

Food Name

</label>

<input type="text"
       name="name"
       value="{{ $food->name }}"
       class="w-full border border-gray-300 rounded-2xl p-4">

</div>

<div class="mb-8">

<label class="block text-lg font-semibold mb-3">

Description

</label>

<textarea name="description"
          rows="5"
          class="w-full border border-gray-300 rounded-2xl p-4">{{ $food->description }}</textarea>

</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8">

<div>

<label class="block text-lg font-semibold mb-3">

Price

</label>

<input type="text"
       name="price"
       value="{{ $food->price }}"
       class="w-full border border-gray-300 rounded-2xl p-4">

</div>

<div>

<label class="block text-lg font-semibold mb-3">

Category

</label>

<input type="text"
       name="category"
       value="{{ $food->category }}"
       class="w-full border border-gray-300 rounded-2xl p-4">

</div>

</div>

<div class="mt-8">

<label class="block text-lg font-semibold mb-3">

Image Name

</label>

<input type="text"
       name="image"
       value="{{ $food->image }}"
       class="w-full border border-gray-300 rounded-2xl p-4">

</div>

<button type="submit"
        class="mt-10 bg-orange-500 hover:bg-orange-600
               text-white px-10 py-4 rounded-2xl text-xl">

Update Food

</button>

</form>

</div>

</div>

</section>

@endsection