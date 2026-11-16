<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

        <title> our title {{ isset ($title) ? $title :''}}</title>

       
    </head>
    <body >
       <body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <h1 class="text-2xl font-bold text-indigo-600">
                MyWebsite
            </h1>

            <div class="flex gap-6">
               <x-navlink href="/" :active=" request()->is('/') ">Home</x-navlink>
                <x-navlink href="/about"  :active=" request()->is('about') ">About</x-navlink>
                 <x-navlink href="/contact"  :active=" request()->is('contact') ">Contact</x-navlink>
            

            <button class="bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700">
                Get Started
            </button>

        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-indigo-600 text-white py-20 text-center px-6">

        <h2 class="text-4xl font-bold mb-4">
            Welcome to Our {{$title ?? ''}}
        </h2>

        <p class="text-indigo-100 max-w-2xl mx-auto mb-8">
            Build your business with modern and professional solutions.
        </p>

        <button class="bg-white text-indigo-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100">
            Learn More
        </button>

    </section>

    <!-- Main Content -->
   

   {{ $slot }}
    </body>
</html>