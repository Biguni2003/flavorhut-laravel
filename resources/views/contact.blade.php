@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->

<section class="relative h-[450px]">

    <img src="{{ asset('images/contactbanner.jpg') }}"
         class="w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/60 flex items-center justify-center">

        <div class="text-center px-6">

            <h1 class="text-6xl md:text-7xl font-bold text-white">

                Contact Us

            </h1>

            <p class="text-white text-xl mt-6 max-w-3xl mx-auto">

                We would love to hear from you.
                Send us your questions, feedback,
                or support requests anytime.

            </p>

        </div>

    </div>

</section>

<!-- CONTACT SECTION -->

<section class="py-24 bg-orange-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            <!-- LEFT SIDE -->

            <div>

                <h2 class="text-5xl font-bold text-orange-600 mb-10">

                    Get In Touch

                </h2>

                <p class="text-lg text-gray-700 leading-9">

                    Our support team is always ready to help you with
                    orders, delivery information, feedback,
                    and customer support.

                    Feel free to contact us anytime using
                    the details below or by sending us
                    a message through the contact form.

                </p>

                <!-- CONTACT INFO -->

                <div class="space-y-8 mt-12">

                    <!-- LOCATION -->

                    <div class="bg-white p-8 rounded-3xl shadow-lg flex gap-6 items-center">

                        <div class="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center">

                            <span class="text-3xl">📍</span>

                        </div>

                        <div>

                            <h3 class="text-2xl font-bold text-gray-800">

                                Location

                            </h3>

                            <p class="text-gray-600 mt-2">

                                Negombo, Sri Lanka

                            </p>

                        </div>

                    </div>

                    <!-- PHONE -->

                    <div class="bg-white p-8 rounded-3xl shadow-lg flex gap-6 items-center">

                        <div class="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center">

                            <span class="text-3xl">📞</span>

                        </div>

                        <div>

                            <h3 class="text-2xl font-bold text-gray-800">

                                Phone Number

                            </h3>

                            <p class="text-gray-600 mt-2">

                                +94 77 123 4567

                            </p>

                        </div>

                    </div>

                    <!-- EMAIL -->

                    <div class="bg-white p-8 rounded-3xl shadow-lg flex gap-6 items-center">

                        <div class="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center">

                            <span class="text-3xl">✉️</span>

                        </div>

                        <div>

                            <h3 class="text-2xl font-bold text-gray-800">

                                Email Address

                            </h3>

                            <p class="text-gray-600 mt-2">

                                support@flavorhut.com

                            </p>

                        </div>

                    </div>

                    <!-- HOURS -->

                    <div class="bg-white p-8 rounded-3xl shadow-lg flex gap-6 items-center">

                        <div class="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center">

                            <span class="text-3xl">⏰</span>

                        </div>

                        <div>

                            <h3 class="text-2xl font-bold text-gray-800">

                                Working Hours

                            </h3>

                            <p class="text-gray-600 mt-2">

                                24/7 Customer Support

                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- RIGHT SIDE -->

            <div>

                <form class="bg-white p-10 rounded-3xl shadow-xl">

                    <h2 class="text-4xl font-bold text-gray-800 mb-10">

                        Send Message

                    </h2>

                    <!-- NAME -->

                    <div class="mb-8">

                        <label class="block mb-3 text-lg font-semibold">

                            Full Name

                        </label>

                        <input type="text"
                               placeholder="Enter your name"
                               class="w-full border border-gray-300
                                      rounded-2xl p-4 outline-none
                                      focus:border-orange-500">

                    </div>

                    <!-- EMAIL -->

                    <div class="mb-8">

                        <label class="block mb-3 text-lg font-semibold">

                            Email Address

                        </label>

                        <input type="email"
                               placeholder="Enter your email"
                               class="w-full border border-gray-300
                                      rounded-2xl p-4 outline-none
                                      focus:border-orange-500">

                    </div>

                    <!-- PHONE -->

                    <div class="mb-8">

                        <label class="block mb-3 text-lg font-semibold">

                            Phone Number

                        </label>

                        <input type="text"
                               placeholder="Enter your phone number"
                               class="w-full border border-gray-300
                                      rounded-2xl p-4 outline-none
                                      focus:border-orange-500">

                    </div>

                    <!-- MESSAGE -->

                    <div class="mb-8">

                        <label class="block mb-3 text-lg font-semibold">

                            Message

                        </label>

                        <textarea rows="6"
                                  placeholder="Write your message..."
                                  class="w-full border border-gray-300
                                         rounded-2xl p-4 outline-none
                                         focus:border-orange-500"></textarea>

                    </div>

                    <!-- BUTTON -->

                    <button class="w-full bg-orange-500 hover:bg-orange-600
                                   text-white py-4 rounded-2xl
                                   text-xl font-semibold transition">

                        Send Message

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

<!-- MAP SECTION -->

<section class="pb-24 bg-orange-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="bg-white rounded-3xl overflow-hidden shadow-xl">

            <img src="{{ asset('images/map.jpg') }}"
                 class="w-full h-[450px] object-cover">

        </div>

    </div>

</section>

@endsection