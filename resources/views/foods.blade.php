@extends('layouts.app')

@section('content')

<section class="bg-[#f6efe6] min-h-screen py-20">

    <div class="max-w-7xl mx-auto px-6">

        <!-- TITLE -->

        <div class="text-center mb-14">

            <h1 class="text-6xl font-extrabold text-orange-600 mb-5">
                Our Delicious Foods
            </h1>

            <p class="text-2xl text-gray-600">
                Explore premium meals made with love.
            </p>

        </div>

        <!-- LIVEWIRE FOOD SEARCH -->

        <livewire:food-search />

    </div>

</section>
<livewire:food-counter />
@endsection