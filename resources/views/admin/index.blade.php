@extends('layouts.app')

@section('content')

<section class="py-20 bg-orange-50 min-h-screen">

    <div class="max-w-6xl mx-auto px-6">

        <h1 class="text-5xl font-bold text-center text-orange-600 mb-16">

            Admin Dashboard

        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <div class="bg-white rounded-3xl shadow-xl p-10">

                <h2 class="text-3xl font-bold text-gray-800">

                    Total Foods

                </h2>

                <p class="text-5xl text-orange-500 font-bold mt-6">

                    {{ $foods }}

                </p>

            </div>

            <div class="bg-white rounded-3xl shadow-xl p-10">

                <h2 class="text-3xl font-bold text-gray-800">

                    Total Orders

                </h2>

                <p class="text-5xl text-orange-500 font-bold mt-6">

                    {{ $orders }}

                </p>

            </div>

        </div>

    </div>

</section>

@endsection