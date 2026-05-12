
<div>

@if(empty($cart))

<div class="bg-white p-12 rounded-3xl shadow-xl text-center">

    <h2 class="text-3xl font-bold text-gray-700">
        Your cart is empty
    </h2>

</div>

@else

@php $total = 0; @endphp

<div class="space-y-8">

@foreach($cart as $index => $item)

@php
$subtotal = $item['price'] * $item['quantity'];
$total += $subtotal;
@endphp

<div class="bg-white rounded-3xl shadow-xl p-8 flex gap-8 items-center">

    <img src="{{ asset('images/' . $item['image']) }}"
         class="w-40 h-40 object-cover rounded-2xl">

    <div class="flex-1">

        <h2 class="text-3xl font-bold text-gray-800">
            {{ $item['name'] }}
        </h2>

        <p class="text-gray-600 mt-3 text-lg">
            {{ $item['description'] }}
        </p>

        <p class="text-orange-500 text-2xl font-bold mt-4">
            Rs. {{ $item['price'] }}
        </p>

        <div class="flex items-center gap-4 mt-5">

            <button
                wire:click="decrease({{ $index }})"
                class="bg-gray-200 hover:bg-gray-300
                w-12 h-12 rounded-full
                flex items-center justify-center
                text-2xl font-bold">

                -

            </button>

            <span class="text-2xl font-bold">
                {{ $item['quantity'] }}
            </span>

            <button
                wire:click="increase({{ $index }})"
                class="bg-orange-500 hover:bg-orange-600
                text-white w-12 h-12 rounded-full
                flex items-center justify-center
                text-2xl font-bold">

                +

            </button>

        </div>

        <p class="text-xl font-semibold text-gray-700 mt-5">

            Subtotal:

            <span class="text-orange-500">
                Rs. {{ $subtotal }}
            </span>

        </p>

        <a href="/delete/{{ $index }}"
           class="inline-block mt-5 bg-red-500 hover:bg-red-600
           text-white px-5 py-3 rounded-xl">

            Remove Item

        </a>

    </div>

</div>

@endforeach

<div class="bg-white rounded-3xl shadow-xl p-8 flex justify-between items-center">

    <h2 class="text-4xl font-bold">
        Total
    </h2>

    <p class="text-4xl font-bold text-orange-500">
        Rs. {{ $total }}
    </p>

</div>

<div class="text-right">

    <a href="/checkout"
       class="bg-orange-500 hover:bg-orange-600
       text-white px-8 py-4 rounded-2xl text-xl inline-block">

        Proceed To Checkout

    </a>

</div>

</div>

@endif

</div>
