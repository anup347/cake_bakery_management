<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sonuz Oven</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>

    <div class="relative min-h-screen md:flex ">

        <!--mobile-->
        <div class=" bg-gray-800 text-gray-100 flex justify-between md:hidden">
            <a href="" class="block p-4 text-white font-bold">Sonuz Oven</a>
            <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">

                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
            </button>
        </div>
        
        
        <!-- Side bar-->
        <div class="sidebar-main text-white text-lg w-64 bg-pink-300 rounded-lg space-y-6 py-7 px-2
        absolute inset-y-0 left-0  transform -translate-x-full md:relative md:translate-x-0 transition  duration-200 ease-in-out">


            <a href="{{ route('cakes.index') }}" class="flex items-center space-x-2 px-4">
                <img class="w-8 h-8" src="{{ URL('/images/cake-svgrepo-com.svg') }}">
                <span class="tracking-widest text-2xl font-bold">Sonuz Oven</span>
            </a>

            <nav>
             <a href="{{ route('cakes.index') }}"  class="block py-2.5 px-4 hover:bg-pink-600 rounded">Cakes</a> 
              
              @auth
              <a href="{{ route('orders.myorder') }}" class="block py-2.5 px-4 hover:bg-pink-600 rounded">My Orders</a>
              @endauth  
              
              <a href="" class="block py-2.5 px-4 hover:bg-pink-600 rounded">Contact</a> 

              @guest
              <a href="{{ route('register') }}" class="block py-2.5 px-4 hover:bg-pink-600 rounded">Register</a>
              <a href="{{ route('login') }}" class="block py-2.5 px-4 hover:bg-pink-600 rounded">Login</a>
              @endguest

              @auth  
              <a href="" class="block py-2.5 px-4 hover:bg-pink-600 rounded">Anoop</a>    
              <div>
                  <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="block py-2.5 px-4 hover:bg-pink-600 rounded">Signout</button>
                  </form>
                  
              </div>
              @endauth 

            </nav>

        </div>

        <div class="flex justify-center p-10 bg-gray-100 w-full">

            @yield('content')
        </div>
    </div>
</body>
<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
</html>




