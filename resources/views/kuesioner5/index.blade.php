<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuesioner Kepuasan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-blue-600 text-white py-2 px-8 shadow-md flex items-center">
        <img src="/asset/logo1.png" class="w-16 h-16 object-contain mr-4" alt="Logo">
        <h1 class="text-xl md:text-2xl font-bold">KUESIONER STIKES NOTOKUSUMO YOGYAKARTA</h1>
    </nav>

    <!-- Konten Utama -->
    <div class="flex flex-col items-center gap-6 p-8 w-full max-w-4xl mx-auto">

        <!-- Deskripsi -->
        <p class="text-gray-700 text-center text-lg font-semibold">
            Silakan isi kuesioner untuk memberikan penilaian kepuasan mitra penelitian dalam aspek penelitian.
        </p>

        <!-- Judul Kuesioner -->
        <div class="w-full text-center px-6 py-4 rounded-lg border-2 border-teal-600 text-teal-600 font-semibold shadow-md text-lg">
            KUESIONER KEPUASAN MITRA PENELITIAN DALAM ASPEK PENELITIAN
        </div>

        <!-- Tombol Aksi -->
        <div class="w-full flex flex-col md:flex-row gap-4 justify-center">
            <a href="{{ route('kuesioner5.create') }}"
               class="w-full md:w-40 text-center font-semibold px-6 py-3 bg-green-600 text-white rounded-xl transition hover:scale-105 hover:bg-green-700 shadow-md">
                Mulai
            </a>
            <a href="{{ route('dashboard') }}"
               class="w-full md:w-40 text-center font-semibold px-6 py-3 bg-gray-600 text-white rounded-xl transition hover:scale-105 hover:bg-gray-700 shadow-md">
                Kembali
            </a>
        </div>

        <!-- Hasil Kuesioner -->
        <div class="bg-white w-full p-8 mt-10 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-center mb-6">Hasil Kuesioner Kepuasan</h2>

            <div class="bg-gray-100 p-6 rounded-md text-center">
                <h3 class="text-lg font-semibold mb-2">Rata-rata Kepuasan:</h3>
                <p class="text-3xl font-bold text-blue-600 mb-4">
                    {{ $rataRata ? round($rataRata, 2) : '-' }}
                </p>

                <h3 class="text-lg font-semibold mb-2">Kategori Kepuasan:</h3>
                <span class="text-xl font-bold px-6 py-2 rounded-lg text-white inline-block"
                      style="background-color: 
                      {{ $kategori == 'Ti
