<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <section class="w-screen h-screen relative animated-background">

        <div class="absolute top-0 left-0 w-screen h-screen bg-black bg-opacity-20 flex flex-col justify-center items-center container">
            <div class="text-4xl font-bold text-white mb-3">{{ config('app.name', 'Laravel') }}</div>
            <form action="{{route('search')}}">
                <div class="flex flex-col justify-center items-center">
                    <div class="text-xl text-white mb-3">Masukkan NIS untuk Mencari siswa Lengkap Dengan Poin yang dimiliki nya</div>
                    <input type="text" name="nis" id="nis" class="block w-full max-w-md mb-3 mx-4 text-2xl rounded-xl" placeholder="NIS Anda" required>
                    <button class="text-xl bg-orange-500 hover:bg-orange-700 text-white py-3 px-6 font-bold mb-3  rounded-lg">
                        Search
                      </button>
                      
                </div>
            </form>
        </div>

    </section>

</body>

</html>
