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
<body class="w-screen h-screen relative animated-background">

    <div class="bg-orange-500 text-white text-3xl font-bold py-10">
        <div class="container mx-auto text-center">
            {{ config('app.name', 'Laravel') }}
        </div>
    </div>

    <div class="conatainer flex flex-wrap justify-center text-center">


    <div class="mt-4 bg-black text-orange-500 rounded-xl p-4 container mx-auto">
        @if ($siswa === null)
        <div class="text-lg text-center"> ..::SISWA DENGAN NIS : '{{$nis}}' TIDAK ADA::.. </div>
        @else
        <div class="flex justify-center my-10"> 
            <img src="{{ asset('img/' . ($siswa->foto ?? 'no_profile.jpg')) }}" class="rounded-full" alt="Foto Profil">
        </div>
        <div class="text-xl font-semibold mb-3">NIS: {{$nis}}</div>
        @if ($siswa === null)
        <div class="text-lg text-center"> ..::SISWA TIDAK DITEMUKAN::.. </div>
        @else
        <div class="text-lg font-semibold mb-3">Nama : {{$siswa->nama}}</div>
        <div class="text-lg font-semibold mb-3">NISN : {{$siswa->nisn}}</div>
        <div class="text-lg font-semibold mb-3">Kelas : {{$siswa->kelas->nama_kelas}}</div>
        <div class="text-lg font-semibold mb-3">Jurursan : {{$siswa->kelas->jurusan->nama_jurusan}}</div>
        <div class="text-lg font-semibold mb-3">Alamat : {{$siswa->alamat}}</div>
        <div class="text-lg font-semibold mb-3">Total poin : {{$totalPoint}}</div>
        @endif

        <div class="relative overflow-x-auto">
            <table class="w-full text-lg text-left text-white ">
                <thead class="text-white uppercase bg-orange-500">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Kode Aksi
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Kode Pelanggaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Keterangan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($aksi as $aksi)
                    @foreach ($aksi->listPelanggaran as $pelanggaran)
                        <tr class="bg-orange-400 border-b dark:bg-gray-800 ">
                            <td class="px-6 py-4">
                                {{ $pelanggaran->kode_aksi }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pelanggaran->kode_pelanggaran }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pelanggaran->keterangan }}
                            </td>
                        </tr>
                    @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
</body>
</html>