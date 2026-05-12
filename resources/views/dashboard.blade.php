@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-[#f5efe6] py-16 px-4">

    <div class="max-w-5xl mx-auto">

        <div class="bg-gray-100 rounded-3xl shadow-2xl p-10">

            <!-- TITLE -->

            <div class="text-center mb-12">

                <h1 class="text-5xl font-extrabold text-orange-500 mb-3">

                    Customer Dashboard

                </h1>

                <p class="text-gray-600 text-lg">

                    Welcome to FlavorHut

                </p>

            </div>

            <!-- USER DETAILS -->

            <div class="grid md:grid-cols-2 gap-8 mb-12">

                <!-- NAME -->

                <div class="bg-orange-50 rounded-2xl p-6 shadow">

                    <h2 class="text-gray-500 text-sm mb-2">

                        Full Name

                    </h2>

                    <p class="text-2xl font-bold text-gray-800">

                        {{ Auth::user()->name }}

                    </p>

                </div>

                <!-- EMAIL -->

                <div class="bg-orange-50 rounded-2xl p-6 shadow">

                    <h2 class="text-gray-500 text-sm mb-2">

                        Email Address

                    </h2>

                    <p class="text-xl font-semibold text-gray-800 break-all">

                        {{ Auth::user()->email }}

                    </p>

                </div>

            </div>

            <!-- STATS -->

            <div class="grid md:grid-cols-3 gap-8">

                <!-- TOTAL ORDERS -->

                <div class="bg-[#f4e3c6] rounded-2xl p-8 shadow">

                    <h2 class="text-5xl font-extrabold text-orange-600 mb-3">

                        3

                    </h2>

                    <p class="text-2xl text-black">

                        Total Orders

                    </p>

                </div>

                <!-- TOTAL SPENDING -->

                <div class="bg-[#f4e3c6] rounded-2xl p-8 shadow">

                    <h2 class="text-5xl font-extrabold text-orange-600 mb-3">

                        Rs. 12650

                    </h2>

                    <p class="text-2xl text-black">

                        Total Spending

                    </p>

                </div>

                <!-- ACCOUNT TYPE -->

                <div class="bg-[#f4e3c6] rounded-2xl p-8 shadow">

                    <h2 class="text-5xl font-extrabold text-orange-600 mb-3 capitalize">

                        {{ Auth::user()->role }}

                    </h2>

                    <p class="text-2xl text-black">

                        Account Type

                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection