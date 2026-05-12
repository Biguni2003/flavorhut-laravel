<!DOCTYPE html>
<html lang="en">
<head>
    @livewireStyles
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlavorHut</title>

    <link rel="stylesheet" href="{{ asset('css/output.css') }}">

    
</head>
<body>

@livewireScripts
@if(session('success'))

<div class="max-w-4xl mx-auto mt-6">

    <div class="bg-green-500 text-white px-6 py-4 rounded-2xl shadow-lg text-center text-lg">

        {{ session('success') }}

    </div>

</div>

@endif
    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

</body>
</html>