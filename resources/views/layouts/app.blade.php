<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BUMDes')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <header class="bg-white shadow">
        <nav class="bg-white shadow-md">
            <div class="max-w-screen-lg mx-auto flex justify-between items-center px-6 py-4">
                <!-- Logo -->
                <div class="text-2xl font-bold text-gray-800">
                    BUMDes
                </div>
        
                <!-- Navbar Items -->
                <div class="flex items-center space-x-6">
                    <!-- Links -->
                    <a href="/playground" class="text-gray-600 hover:text-gray-900 font-medium">Playground</a>
                    <a href="{{ route('catering') }}" class="text-gray-600 hover:text-gray-900 font-medium">Catering</a>
                    <a href="/all-product" class="text-gray-600 hover:text-gray-900 font-medium">All Product</a>
                    
                    <!-- Cart Icon -->
                    <div class="flex items-center space-x-2">
                        <img src="/img/cart-icon.svg" alt="Cart" class="w-6 h-6">
                        <span class="text-gray-600 font-medium">Cart</span>
                    </div>
                </div>
            </div>
        </nav>        
    </header>
    <main class="max-w-screen-lg mx-auto py-8">
        @yield('content')
    </main>
</body>
</html>