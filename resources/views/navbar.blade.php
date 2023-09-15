<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body>
    <header class="sticky top-0">
        <nav class="bg-white sticky top-0 flex justify-center z-10">
            <div class="container flex justify-between p-5 items-center">
                <div class="flex items-center">
                    <div class="w-10 h-10">
                        <img class="w-full h-full" src="assets/images/logo.png" />
                    </div>
                    <span>
                        <h4 class="font-bold text-lg">SHOES</h4>
                    </span>
                </div>

                @if (auth()->check())
                @if (Auth::user()->role == 1)
                <!-- Admin Navbar -->
                <ul class="flex justify-between">
                    <li><a class="px-3 px-2 font-semibold {{Route::is('home')?'text-black':'text-gray-600'}} text-sm mx-3" href="{{route('home')}}">HOME</a></li>
                    <li><a class="px-3 px-2 font-semibold {{Route::is('products')?'text-black':'text-gray-600'}} text-sm mx-3" href="{{route('products')}}">PRODUCTS</a></li>
                    <li><a class="px-3 px-2 font-semibold text-gray-600 text-sm mx-3" href="#">GRAPHS</a></li>
                    <li><a class="px-3 px-2 font-semibold text-gray-600 text-sm mx-3" href="#">TRANSACTIONS</a></li>
                </ul>
                @else
                <!-- User Navbar -->
                <ul class="flex justify-between">
                    <li><a class="px-3 px-2 font-semibold {{Route::is('home')?'text-black':'text-gray-600'}} text-sm mx-3" href="{{route('home')}}">HOME</a></li>
                    <li><a class="px-3 px-2 font-semibold {{Route::is('products')?'text-black':'text-gray-600'}} text-sm mx-3" href="{{route('products')}}">PRODUCTS</a></li>
                    <li><a class="px-3 px-2 font-semibold {{Route::is('shop')?'text-black':'text-gray-600'}} text-sm mx-3" href="{{route('shop')}}">SHOP</a></li>
                    <li><a class="px-3 px-2 font-semibold text-gray-600 text-sm mx-3" href="#">TRANSACTIONS</a></li>
                </ul>
                @endif
                @else
                <ul class="flex justify-between">
                    <li><a class="px-3 px-2 font-semibold {{Route::is('home')?'text-black':'text-gray-600'}} text-sm mx-3" href="{{route('home')}}">HOME</a></li>
                    <li><a class="px-3 px-2 font-semibold text-gray-600 text-sm mx-3" href="#">ABOUT</a></li>
                    <li><a class="px-3 px-2 font-semibold {{Route::is('products')?'text-black':'text-gray-600'}} text-sm mx-3" href="{{route('products')}}">PRODUCTS</a></li>
                    <li><a class="px-3 px-2 font-semibold text-gray-600 text-sm mx-3" href="#">SUPPORT</a></li>
                </ul>
                @endif

                <div class="flex">
                    @if (auth()->check())
                    <div class="w-6 h-6 me-6">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                            <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
                        </svg>
                    </div>
                    @endif

                    <div class="w-6 h-6">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                        </svg> -->
                        @if (!auth()->check())
                        @if(!Route::is('login'))
                        <a class="py-2 px-1 rounded font-semibold text-gray-600 text-sm hover:bg-blue-500 hover:text-white" href="{{route('login')}}">LOGIN</a>
                        @else
                        <a class="py-2 px-1 rounded font-semibold text-gray-600 text-sm hover:bg-blue-500 hover:text-white" href="{{route('register')}}">REGISTER</a>
                        @endif
                        @else
                        <div class="relative inline-block text-left">
                            <div>
                                <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white text-sm font-semibold text-gray-900" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="absolute right-0 z-10 mt-2 w-56 hidden origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" id="menu-content" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Support</a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">License</a>
                                    <form method="POST" action="{{route('logout')}}" role="none">
                                        @csrf
                                        <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    @vite('resources/js/app.js')
</body>

</html>