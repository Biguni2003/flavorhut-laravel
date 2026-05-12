@extends('layouts.app')

@section('content')

<section class="text-center py-16 bg-orange-50">

    <h1 class="text-5xl font-bold text-orange-600">

        Refreshing Beverages

    </h1>

    <p class="text-gray-600 text-xl mt-4">

        Fresh drinks made to refresh your day.

    </p>

</section>

<!-- BEVERAGE SECTION -->

<section class="flex-grow pb-20 bg-orange-50 min-h-screen">

<div class="max-w-7xl mx-auto px-8">

<div class="grid grid-cols-1 md:grid-cols-2 gap-14">

@foreach($drinks as $drink)

<!-- CARD -->

<div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:scale-105 transition duration-300">

    <!-- IMAGE -->

    <img src="{{ asset('images/' . $drink->image) }}"
         class="w-full h-72 object-cover">

    <!-- CONTENT -->

    <div class="p-8">

        <h2 class="text-4xl font-bold text-gray-800">

            {{ $drink->name }}

        </h2>

        <p class="text-gray-600 mt-4 text-lg leading-8">

            {{ $drink->description }}

        </p>

        <div class="mt-6 flex justify-between items-center">

            <span class="text-3xl font-bold text-orange-500">

                Rs. {{ $drink->price }}

            </span>

            <!-- CART BUTTON -->

            <a href="/add-to-cart/{{ $drink->id }}"
               class="bg-orange-500 hover:bg-orange-600
                      text-white px-6 py-4 rounded-2xl text-lg inline-block">

                Order Now

            </a>

        </div>

    </div>

</div>

@endforeach

</div>

</div>

</section>

@endsection