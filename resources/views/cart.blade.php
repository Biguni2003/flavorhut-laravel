@extends('layouts.app')

@section('content')

<section class="py-20 flex-grow bg-orange-50 min-h-screen">

    <div class="max-w-6xl mx-auto px-6">

        <h1 class="text-5xl font-bold text-center text-orange-600 mb-14">
            Your Cart
        </h1>

        <livewire:cart-total />

    </div>

</section>

@endsection