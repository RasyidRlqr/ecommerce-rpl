<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>

    <div class="min-h-screen h-screen flex flex-col bg-gray-50">

        <header class="p-2 bg-white">

            <nav class="bg-white px-2 sm:px-4 py-2.5 static w-full z-20 top-0 left-0 border-gray-200 shadow-md rounded-md">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    <a href="https://smkmuh1-yog.sch.id/" class="flex items-center">
                        <img src="https://smkmuh1-yog.sch.id/wp-content/uploads/2021/08/logo_135.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Ecommerce</span>
                    </a>
                    <div class="flex md:order-2">

                        @if(auth()->check())
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="px-4 py-2 rounded bg-red-500 text-white">Logout</button>
  </form>
@else

@endif

                        {{--button menu in mobile --}}
                        <button type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        
                        {{-- drawer menu component --}}
                        <div id="drawer-navigation" class="fixed z-40 h-screen p-4 overflow-y-auto bg-white w-auto dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">

                            <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>
                           
                            <button type="button" data-drawer-dismiss="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close menu</span>
                            </button>

                            <div class="py-4 overflow-y-auto">
                                <ul class="space-y-2">
                                    <li>
                                        <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                                            <span class="ml-3">Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <button type="button" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                                            <span class="flex-1 ml-3 text-left whitespace-nowrap">E-commerce</span>
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </button>
                                        <ul id="dropdown-example" class="hidden py-2 space-y-2">
                                            <li>
                                                <a href="{{ route('products.index') }}" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('game') }}" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Tentang Game Construck</a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Tentang Website</a>
                                            </li>
                                             <li>
                                                <a href="#" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Tentang Kursus Coding</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        
                                </ul>
                            </div>
                        </div>
                        {{-- end drawer menu component --}}
 
                    </div>
                    
                </div>
            </nav>

        </header>
      
        <!-- main container -->
        <div class="flex-1 flex flex-row overflow-y-auto">

            {{-- sidebar --}}
            <nav class="order-first md:w-1/5 w-0 p-2 overflow-x-hidden border-r bg-white hidden md:block">
            
                <aside class="w-full" aria-label="Sidebar">
                    <div class="py-4 px-3 rounded">
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                                <span class="ml-3">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example2" data-collapse-toggle="dropdown-example2">
                                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                                </svg>

                                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>E-commerce</span>

                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>

                            </button>

                                <ul id="dropdown-example2" class="hidden py-2 space-y-2">
                                    <li>
                                        <a href="{{ route('products.index') }}"  class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                                    </li>
                                   <li>
                                        <a href="{{ route('game') }}" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Tentang Game Construck</a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Tentang Website</a>
                                    </li>
                                     <li>
                                        <a href="#" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Tentang Kursus Coding</a>
                                    </li>
                                </ul>
                         </li>
                       
                    </ul>
                    </div>
                </aside>
     
            </nav>
            {{-- end sidebar --}}

             {{-- content --}}
            <main class="flex-1 bg-white text-xs p-2 overflow-y-auto w-full">
                 
                <!-- Breadcrumb -->
@php
    $segments = Request::segments(); // contoh: ["dashboard", "products"]

    function formatBreadcrumb($text) {
        return ucfirst(str_replace(['-', '_'], ' ', $text));
    }

    $url = '';
@endphp

<nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1">
        <!-- Tambah dashboard hanya sekali -->
        <li class="inline-flex items-center">
            <a href="{{ route('dashboard') }}" class="text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                Dashboard
            </a>
        </li>

        @foreach($segments as $index => $segment)
            @php $url .= "/$segment"; @endphp

            @if($segment !== 'dashboard') <!-- cegah duplikat dashboard -->
                <li class="inline-flex items-center">
                    <span class="mx-2">/</span>
                    @if($index !== count($segments)-1)
                        <a href="{{ $url }}" class="text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            {{ formatBreadcrumb($segment) }}
                        </a>
                    @else
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">
                            {{ formatBreadcrumb($segment) }}
                        </span>
                    @endif
                </li>
            @endif
        @endforeach
    </ol>
</nav>
    
                <div class="animated-content">
                @yield('content')
                </div>
            </main>
            {{-- end content --}}
            
        </div>
        <!-- end main container -->
      
        {{-- <footer class="bg-indigo-50 border-t border-indigo-300 p-2">Footer</footer> --}}
      </div>

      @vite('resources/js/app.js')
      
      @stack('scripts')

</body>
</html>