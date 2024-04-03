<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- Style --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- image --}}
    <link rel="shortcut icon" href="{{asset('image/main-logo.jpg')}}" type="image/x-icon">

    {{-- Title --}}
    <title>dashboard</title>
</head>

<body>
    <div class="antialiased">
        <x-dash-menu-top />

        <!-- Sidebar -->
        <x-dash-menu-left />

        <main class="p-4 md:ml-64 h-auto pt-20">
                @yield('content')
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</body>

</html>
     


