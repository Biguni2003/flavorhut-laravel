@extends('layouts.app')

@section('content')

<!-- HERO -->

<section class="relative h-[400px] md:h-[500px]">

    <img src="{{ asset('images/aboutbanner.jpg') }}"
         class="w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/60 flex items-center justify-center">

        <div class="text-center px-6">

            <h1 class="text-5xl md:text-7xl font-bold text-white">

                About FlavorHut

            </h1>

            <p class="text-white text-lg md:text-xl mt-6 max-w-3xl mx-auto leading-8">

                Delivering delicious meals and refreshing beverages
                with premium quality and exceptional customer service.

            </p>

        </div>

    </div>

</section>

<!-- ABOUT SECTION -->

<section class="py-20 md:py-24 bg-orange-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- IMAGE -->

            <div>

                <img src="{{ asset('images/restaurant.jpg') }}"
                     class="rounded-3xl shadow-2xl w-full h-[300px] md:h-[500px] object-cover">

            </div>

            <!-- CONTENT -->

            <div>

                <h2 class="text-4xl md:text-5xl font-bold text-orange-600 mb-8">

                    Who We Are

                </h2>

                <p class="text-base md:text-lg text-gray-700 leading-9">

                    FlavorHut is a premium online food ordering platform
                    created to provide customers with delicious meals,
                    fresh beverages, and a smooth online ordering experience.

                    We focus on quality ingredients, fast delivery,
                    professional customer service, and modern technology
                    to ensure every customer enjoys a memorable dining experience.

                    Our expert chefs prepare meals using fresh ingredients
                    while maintaining high standards of hygiene and taste.

                </p>

                <!-- STATS -->

                <div class="grid grid-cols-2 gap-6 mt-10">

                    <div class="bg-white p-6 rounded-2xl shadow-lg text-center">

                        <h3 class="text-3xl md:text-4xl font-bold text-orange-500">

                            10K+

                        </h3>

                        <p class="mt-3 text-gray-700">

                            Happy Customers

                        </p>

                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-lg text-center">

                        <h3 class="text-3xl md:text-4xl font-bold text-orange-500">

                            150+

                        </h3>

                        <p class="mt-3 text-gray-700">

                            Food Items

                        </p>

                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-lg text-center">

                        <h3 class="text-3xl md:text-4xl font-bold text-orange-500">

                            25+

                        </h3>

                        <p class="mt-3 text-gray-700">

                            Professional Chefs

                        </p>

                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-lg text-center">

                        <h3 class="text-3xl md:text-4xl font-bold text-orange-500">

                            24/7

                        </h3>

                        <p class="mt-3 text-gray-700">

                            Fast Delivery

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- WHY CHOOSE US -->

<section class="py-20 md:py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-4xl md:text-5xl font-bold text-orange-600 text-center mb-16">

            Why Choose FlavorHut

        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- CARD -->

            <div class="bg-orange-50 p-10 rounded-3xl shadow-lg text-center">

                <img src="{{ asset('images/freshfood.jpg') }}"
                     class="w-full h-56 object-cover rounded-2xl mb-8">

                <h3 class="text-2xl md:text-3xl font-bold text-gray-800">

                    Fresh Ingredients

                </h3>

                <p class="text-gray-600 mt-5 leading-8">

                    We use fresh vegetables, premium meats,
                    and quality ingredients to prepare every meal.

                </p>

            </div>

            <!-- CARD -->

            <div class="bg-orange-50 p-10 rounded-3xl shadow-lg text-center">

                <img src="{{ asset('images/delivery.jpg') }}"
                     class="w-full h-56 object-cover rounded-2xl mb-8">

                <h3 class="text-2xl md:text-3xl font-bold text-gray-800">

                    Fast Delivery

                </h3>

                <p class="text-gray-600 mt-5 leading-8">

                    Our delivery team ensures your food arrives
                    quickly, safely, and fresh at your doorstep.

                </p>

            </div>

            <!-- CARD -->

            <div class="bg-orange-50 p-10 rounded-3xl shadow-lg text-center">

                <img src="{{ asset('images/chef.jpg') }}"
                     class="w-full h-56 object-cover rounded-2xl mb-8">

                <h3 class="text-2xl md:text-3xl font-bold text-gray-800">

                    Professional Chefs

                </h3>

                <p class="text-gray-600 mt-5 leading-8">

                    Our experienced chefs create delicious dishes
                    with amazing flavors and attractive presentation.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- GALLERY -->

<section class="py-20 md:py-24 bg-orange-50">

    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-4xl md:text-5xl font-bold text-orange-600 text-center mb-16">

            Our Food Gallery

        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <img src="{{ asset('images/gallery1.jpg') }}"
                 class="rounded-3xl h-80 w-full object-cover shadow-xl">

            <img src="{{ asset('images/gallery2.jpg') }}"
                 class="rounded-3xl h-80 w-full object-cover shadow-xl">

            <img src="{{ asset('images/gallery3.jpg') }}"
                 class="rounded-3xl h-80 w-full object-cover shadow-xl">

        </div>

    </div>

</section>

@endsection