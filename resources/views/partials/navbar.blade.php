@php
use Illuminate\Support\Facades\Auth;
@endphp

<nav class="bg-orange-500 shadow-lg sticky top-0 z-50 w-full">

    <div class="max-w-7xl mx-auto px-4 py-3">

        <!-- TOP ROW -->

        <div class="flex flex-col md:flex-row
                    md:items-center
                    md:justify-between
                    gap-4">

            <!-- LOGO -->

            <a href="/dashboard"
               class="flex items-center gap-3">

                <img src="{{ asset('images/logo.png') }}"
                     alt="Logo"
                     class="w-12 h-12 rounded-xl
                            bg-white p-1 object-cover">

                <h1 class="text-white text-3xl md:text-5xl font-bold">

                    FlavorHut

                </h1>

            </a>

            <!-- NAVIGATION -->

            <ul class="flex flex-wrap
                       items-center
                       justify-center md:justify-end
                       gap-3 md:gap-5
                       text-white
                       text-sm md:text-lg
                       font-semibold">

                <li>
                    <a href="/dashboard"
                       class="hover:text-yellow-200 transition">
                        Home
                    </a>
                </li>

                <li>
                    <a href="/foods"
                       class="hover:text-yellow-200 transition">
                        Foods
                    </a>
                </li>

                <li>
                    <a href="/beverages"
                       class="hover:text-yellow-200 transition">
                        Beverages
                    </a>
                </li>

                <li>
                    <a href="/about"
                       class="hover:text-yellow-200 transition">
                        About
                    </a>
                </li>

                <li>
                    <a href="/cart"
                       class="hover:text-yellow-200 transition">
                        Cart
                    </a>
                </li>
  
  <li>
<livewire:cart-counter />
</li>
                <li>
                    <a href="/contact"
                       class="hover:text-yellow-200 transition">
                        Contact
                    </a>
                </li>

                @if(Auth::check())

                    @if(Auth::user()->role == 'customer')

                    <li>
                        <a href="/profile"
                           class="hover:text-yellow-200 transition">
                            Profile
                        </a>
                    </li>

                    @endif

                    @if(Auth::user()->role == 'admin')

                    <li>
                        <a href="/admin"
                           class="hover:text-yellow-200 transition">
                            Admin
                        </a>
                    </li>

                    @endif

                    <li>

                        <form method="POST"
                              action="{{ route('logout') }}">

                            @csrf

                            <button type="submit"
                                    class="bg-red-500 px-3 py-1 rounded-full
                                           hover:bg-red-600 transition">

                                Logout

                            </button>

                        </form>

                    </li>

                @else

                    <li>

                        <a href="{{ route('login') }}"
                           class="bg-white text-orange-500
                                  px-3 py-1 rounded-full
                                  hover:bg-orange-100 transition">

                            Login

                        </a>

                    </li>

                @endif

            </ul>

        </div>

    </div>

</nav>