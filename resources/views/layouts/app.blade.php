<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <title>Laravel App - @yield('title')</title>
</head>
<body>


        {{-- Navbar Muster --}}
		<!-- Navbar goes here -->
		<nav class="bg-white shadow-lg">
			<div class="max-w-full mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-9">
						<div>
							<!-- Website Logo -->
							<a href="#" class="flex items-center py-4 px-2">
								<img src="/img/logo/td_logo.jpg" alt="Logo" class="h-8 w-8 mr-2">
								<span class="font-semibold text-gray-500 text-lg">TopicsDict</span>
							</a>
						</div>
						<!-- Primary Navbar items -->
						<div class="hidden md:flex items-center space-x-3">
							<a  href="{{ url('/') }}" 
                                class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold ">
                                Home</a>
							<a  href="{{ url('/contact') }}" 
                                class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">
                                Contact</a>
							<a  href="{{ route('posts.index') }}" 
                                class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">
                                Posts</a>
							<a  href="{{ route('posts.create') }}" 
                                class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">
                                Add</a>

						</div>
					</div>

					<!-- Secondary Navbar items -->
                    <div class="hidden md:flex items-center space-x-3 ">
                        @guest
                            @if (Route::has('register'))
                        <a  href="{{ route('register') }}"
                            class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">
                            Register</a>
                        
                            @endif
                        <a  href="{{ route('login') }}"
                            class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">
                            login</a>
                        
                            @else
                        <a  href="{{ route('logout') }}"
                        class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                            >Logout ({{ Auth::user()->name }})</a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none">
                            @csrf
    
                            </form>
                        @endguest
                    </div>

					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
				<ul class="">
					<li class="active"><a href="{{ url('/') }}" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li>
					<li><a href="{{ url('/contact') }}"  class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact</a></li>
					<li><a href="{{ route('posts.index') }}" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Posts</a></li>
					<li><a href="{{ route('posts.create') }}" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Add</a></li>
                        @guest
                        @if (Route::has('register'))
                            <li><a  href="{{ route('register') }}"
                                class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">
                                    Register</li></a>
                    
                        @endif
                            <li><a  href="{{ route('login') }}"
                                class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">
                                    login </li></a>
                    
                        @else
                            <li><a  href="{{ route('logout') }}"
                                class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                    >Logout ({{ Auth::user()->name }}) </li></a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                        style="display: none">
                        @csrf
                        </form>
                    @endguest
				</ul>
			</div>
			<script>
				const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});
			</script>
		</nav>

        {{-- Ende Navbar Muster --}}

    
    <div class="d-flex flex-column flex-md-row align-items-center p-3
       px-md-4 bg-white border-bottom shadow-sm mb-3">
    <div>
        @if (session('status'))
        
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
            
        @endif
    <div>
    </div>
        @yield('content')
    
</body>
</html>