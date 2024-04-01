<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>dashboard</title>
</head>

<body>
    <div class="antialiased">
        <x-dash-menu-top />

        <!-- Sidebar -->
        <x-dash-menu-left />

        <main class="p-4 md:ml-64 h-auto pt-20">
                @yield('content')
            {{-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4">
                <div class="col-md-8">
                    @yield('index')
                </div>
                <div class="col-md-8">
                    @yield('blog')
                </div>
                <div class="col-md-8">
                    @yield('dashboard')
                </div>
                <div class="col-md-8">
                    @yield('petCare')
                </div>
                <div class="col-md-8">
                    @yield('user')
                </div>
                <div class="col-md-8">
                    @yield('overView')
                </div>
            </div>  --}}
            {{-- <x-nav-menu /> --}}
            {{-- @yield('content') --}}
            {{-- @yield('category') --}}
            {{-- {{ $slot }} --}}
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
     


