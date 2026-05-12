<div>

    <!-- SEARCH BAR -->

    <input
        type="text"
        wire:model.live="search"
        placeholder="Search food..."
        class="w-full border border-gray-300 p-4 rounded-2xl mb-10"
    >

    <!-- FOOD GRID -->

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

        @foreach($foods as $food)

        <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:scale-105 transition duration-300">

            <!-- IMAGE -->

            <img
                src="{{ asset('images/' . $food->image) }}"
                alt="{{ $food->name }}"
                class="w-full h-64 object-cover"
            >

            <!-- CONTENT -->

            <div class="p-6">

                <h2 class="text-3xl font-bold mb-2">
                    {{ $food->name }}
                </h2>

                <p class="text-gray-600 mb-4">
                    {{ $food->description }}
                </p>

                <p class="text-orange-600 text-3xl font-extrabold mb-6">
                    Rs. {{ number_format($food->price, 2) }}
                </p>

                <!-- ADD TO CART BUTTON -->

                <a
                    href="{{ url('/add-to-cart/'.$food->id) }}"
                    class="block text-center w-full bg-orange-500 hover:bg-orange-600 text-white py-3 rounded-xl text-lg font-bold transition"
                >
                    Add To Cart
                </a>

            </div>

        </div>

        @endforeach

    </div>

</div>