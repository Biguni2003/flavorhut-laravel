@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->

<section class="relative min-h-screen">

    <img src="{{ asset('images/homebanner.jpg') }}"
         class="absolute inset-0 w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative z-10 min-h-screen flex items-center">

        <div class="max-w-7xl mx-auto px-6 w-full">

            <div class="max-w-3xl">

                <h1 class="text-5xl md:text-8xl font-bold text-white leading-tight">

                    Delicious Food <br>
                    Delivered Fast

                </h1>

                <p class="mt-8 text-lg md:text-2xl text-gray-200 leading-10">

                    Experience premium meals, refreshing beverages,
                    and lightning-fast delivery from FlavorHut.

                    Fresh ingredients, amazing flavors,
                    and unforgettable dining experiences await you.

                </p>

                <div class="mt-12 flex flex-wrap gap-6">

                    <a href="#"

                       class="bg-orange-500 hover:bg-orange-600
                              text-white px-8 md:px-10 py-4 md:py-5 rounded-2xl
                              text-lg md:text-xl font-semibold transition">

                        Explore Foods

                    </a>

                    <a href="#"

                       class="bg-white hover:bg-gray-200
                              text-black px-8 md:px-10 py-4 md:py-5 rounded-2xl
                              text-lg md:text-xl font-semibold transition">

                        Beverages

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- FEATURES -->

<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-4xl md:text-5xl font-bold text-center text-orange-600 mb-16">

            Why Choose FlavorHut

        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- CARD -->

            <div class="bg-orange-50 p-10 rounded-3xl shadow-xl text-center">

                <img src="{{ asset('images/freshfood.jpg') }}"
                     class="w-full h-56 object-cover rounded-2xl mb-8">

                <h3 class="text-3xl font-bold text-gray-800">

                    Fresh Ingredients

                </h3>

                <p class="text-gray-600 mt-5 leading-8">

                    We prepare every meal using fresh vegetables,
                    premium meats, and high-quality ingredients.

                </p>

            </div>

            <!-- CARD -->

            <div class="bg-orange-50 p-10 rounded-3xl shadow-xl text-center">

                <img src="{{ asset('images/delivery.jpg') }}"
                     class="w-full h-56 object-cover rounded-2xl mb-8">

                <h3 class="text-3xl font-bold text-gray-800">

                    Fast Delivery

                </h3>

                <p class="text-gray-600 mt-5 leading-8">

                    Enjoy lightning-fast delivery services
                    that bring hot meals directly to your doorstep.

                </p>

            </div>

            <!-- CARD -->

            <div class="bg-orange-50 p-10 rounded-3xl shadow-xl text-center">

                <img src="{{ asset('images/chef.jpg') }}"
                     class="w-full h-56 object-cover rounded-2xl mb-8">

                <h3 class="text-3xl font-bold text-gray-800">

                    Professional Chefs

                </h3>

                <p class="text-gray-600 mt-5 leading-8">

                    Our experienced chefs create delicious dishes
                    with exceptional taste and presentation.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- POPULAR FOODS -->

<section class="py-24 bg-orange-50">

    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-4xl md:text-5xl font-bold text-center text-orange-600 mb-16">

            Popular Foods

        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- CARD -->

            <div class="bg-white rounded-3xl overflow-hidden shadow-xl">

                <img src="{{ asset('images/burger.jpg') }}"
                     class="w-full h-72 object-cover">

                <div class="p-8">

                    <h3 class="text-3xl font-bold text-gray-800">

                        Burger

                    </h3>

                    <p class="text-gray-600 mt-4 leading-8">

                        Juicy grilled burgers packed with flavor
                        and premium ingredients.

                    </p>

                    <p class="text-orange-500 text-2xl font-bold mt-6">

                        Starting From Rs. 1800

                    </p>

                </div>

            </div>

            <!-- CARD -->

            <div class="bg-white rounded-3xl overflow-hidden shadow-xl">

                <img src="{{ asset('images/pizza.jpg') }}"
                     class="w-full h-72 object-cover">

                <div class="p-8">

                    <h3 class="text-3xl font-bold text-gray-800">

                        Pizza

                    </h3>

                    <p class="text-gray-600 mt-4 leading-8">

                        Cheesy Italian pizzas with delicious toppings
                        and rich flavors.

                    </p>

                    <p class="text-orange-500 text-2xl font-bold mt-6">

                        Starting From Rs. 3200

                    </p>

                </div>

            </div>

            <!-- CARD -->

            <div class="bg-white rounded-3xl overflow-hidden shadow-xl">

                <img src="{{ asset('images/friedrice.jpg') }}"
                     class="w-full h-72 object-cover">

                <div class="p-8">

                    <h3 class="text-3xl font-bold text-gray-800">

                        Fried Rice

                    </h3>

                    <p class="text-gray-600 mt-4 leading-8">

                        Sri Lankan style fried rice full of flavor
                        and fresh ingredients.

                    </p>

                    <p class="text-orange-500 text-2xl font-bold mt-6">

                        Starting From Rs. 2200

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- CTA SECTION -->

<section class="py-24 bg-orange-500">

    <div class="max-w-5xl mx-auto px-6 text-center">

        <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight">

            Ready To Order Delicious Food?

        </h2>

        <p class="text-white text-lg md:text-xl mt-8 leading-9">

            Join thousands of happy customers enjoying
            premium meals and beverages from FlavorHut.

        </p>

        <a href="#"

           class="inline-block mt-10 bg-white hover:bg-gray-200
                  text-orange-600 px-10 py-5 rounded-2xl
                  text-xl font-bold transition">

            Order Now

        </a>

    </div>

</section>

@endsection