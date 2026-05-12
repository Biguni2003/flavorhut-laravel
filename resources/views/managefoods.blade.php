@extends('layouts.app')

@section('content')

<section class="bg-orange-50 min-h-screen py-20">

<div class="max-w-7xl mx-auto px-6">

<h1 class="text-6xl font-bold text-orange-600 text-center mb-14">

Manage Foods

</h1>

@if(session('success'))

<div class="bg-green-100 text-green-700
            p-5 rounded-2xl mb-10 text-xl">

    {{ session('success') }}

</div>

@endif

<div class="bg-white rounded-3xl shadow-2xl overflow-hidden">

<table class="w-full">

<thead class="bg-orange-500 text-white">

<tr>

<th class="p-6 text-left">Image</th>

<th class="p-6 text-left">Name</th>

<th class="p-6 text-left">Category</th>

<th class="p-6 text-left">Price</th>

<th class="p-6 text-center">Actions</th>

</tr>

</thead>

<tbody>

@foreach($foods as $food)

<tr class="border-b">

<td class="p-6">

<img src="{{ asset('images/' . $food->image) }}"
     class="w-24 h-24 rounded-2xl object-cover">

</td>

<td class="p-6 text-2xl font-bold">

{{ $food->name }}

</td>

<td class="p-6 text-lg">

{{ $food->category }}

</td>

<td class="p-6 text-orange-500 text-2xl font-bold">

Rs. {{ $food->price }}

</td>

<td class="p-6 text-center">


<a href="/edit-food/{{ $food->id }}"
   class="bg-blue-500 hover:bg-blue-600
          text-white px-6 py-3 rounded-xl mr-3">

Edit

</a>

<a href="/delete-food/{{ $food->id }}"
   class="bg-red-500 hover:bg-red-600
          text-white px-6 py-3 rounded-xl">

Delete

</a>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

</section>

@endsection