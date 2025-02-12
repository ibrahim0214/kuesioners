<!DOCTYPE html>
<html lang="id">

<head>
    <title>Kuesioner STIKES Notokusumo</title>
</head>
<x-app-layout>
    <div class="min-h-screen flex flex-col justify-between bg-gray-100 font-sans">
        <!-- Navbar -->
        <nav class="bg-blue-600 text-white py-2 px-8 shadow-md flex justify-between items-center">
            <div class="flex items-center gap-4">
                <img src="/asset/logo1.png" class="w-16 h-16 object-contain" alt="Logo">
                <h1 class="text-xl md:text-2xl font-bold">KUESIONER STIKES NOTOKUSUMO YOGYAKARTA</h1>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex flex-col items-center py-10 px-4">
            <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-2xl">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Silahkan Pilih Kuesioner</h2>
                <div class="flex flex-col gap-4">
                    <a href="{{ route('kuesioner.index') }}"
                        class="block text-center font-semibold px-4 py-3 rounded-lg border-2 border-blue-600 text-blue-600 transition hover:bg-blue-600 hover:text-white">
                        1. Kuesioner Kepuasan Terhadap Kinerja Administrasi Para Tenaga Kependidikan
                    </a>
                    <a href="{{ route('kuesioner2.index') }}"
                        class="block text-center font-semibold px-4 py-3 rounded-lg border-2 border-green-600 text-green-600 transition hover:bg-green-600 hover:text-white">
                        2. Kuesioner Kepuasan Terhadap Pimpinan Stikes Notokusumo Yogyakarta
                    </a>
                    <a href="{{ route('kuesioner3.index') }}"
                        class="block text-center font-semibold px-4 py-3 rounded-lg border-2 border-teal-600 text-teal-600 transition hover:bg-teal-600 hover:text-white">
                        3. Kuesioner Kepuasan Dosen Terhadap layanan Tenaga Kependidikan
                    </a>
                    <a href="{{ route('home') }}"
                        class="mt-6 px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold transition hover:bg-blue-700 text-center">
                        Kembali
                    </a>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-200 text-black text-center py-4 text-sm">
            Copyright © 2025 - All rights reserved by STIKES Notokusumo
        </footer>
    </div>
</x-app-layout>

</html>
