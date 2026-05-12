@extends('layouts.app')

@section('content')

<section class="bg-orange-50 min-h-screen py-24 flex items-center justify-center">

    <div class="bg-white shadow-2xl rounded-3xl p-16 text-center max-w-4xl w-full">

        <!-- SUCCESS TITLE -->

        <h1 class="text-6xl font-bold text-green-500 mb-8">
            Order Successful
        </h1>

        <!-- MESSAGE -->

        <p class="text-2xl text-gray-700 leading-10 mb-10">
            Thank you for ordering from FlavorHut.
            Your food is being prepared and will arrive soon.
        </p>

        <!-- LIVEWIRE ORDER STATUS -->

        <div class="mb-10">
    <livewire:order-status :orderId="1" />
        </div>

        <!-- BUTTON -->

        <a href="/foods"
           class="inline-block bg-orange-500 hover:bg-orange-600 text-white px-10 py-4 rounded-2xl text-xl font-semibold transition">

            Continue Shopping

        </a>

    </div>

</section>

@endsection