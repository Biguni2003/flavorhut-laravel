@extends('layouts.app')

@section('content')

<section class="min-h-screen bg-orange-50 py-20">

    <div class="max-w-4xl mx-auto px-6">

        <div class="bg-white shadow-2xl rounded-3xl p-12">

            <h1 class="text-5xl font-bold text-orange-600 mb-10 text-center">

                My Profile

            </h1>

            <div class="space-y-8">

                <div class="bg-orange-50 p-6 rounded-2xl">

                    <h2 class="text-xl font-bold text-gray-700">

                        Name

                    </h2>

                    <p class="text-2xl mt-3">

                        {{ Auth::user()->name }}

                    </p>

                </div>

                <div class="bg-orange-50 p-6 rounded-2xl">

                    <h2 class="text-xl font-bold text-gray-700">

                        Email

                    </h2>

                    <p class="text-2xl mt-3">

                        {{ Auth::user()->email }}

                    </p>

                </div>

                <div class="bg-orange-50 p-6 rounded-2xl">

                    <h2 class="text-xl font-bold text-gray-700">

                        Role

                    </h2>

                    <p class="text-2xl mt-3 capitalize">

                        {{ Auth::user()->role }}

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection