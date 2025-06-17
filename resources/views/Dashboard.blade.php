<!DOCTYPE html>
<html lang="id">
<head>
    <title>Kuesioner STIKES Notokusumo</title>
</head>

<x-app-layout>
    <div class="min-h-screen flex flex-col justify-between bg-gradient-to-br from-green-50 via-blue-50 to-yellow-50 font-sans">

        <!-- Navbar -->
        <nav class="bg-blue-600 text-white py-2 px-8 shadow-md flex justify-between items-center">
            <div class="flex items-center gap-4">
                <img src="/asset/logo1.png" class="w-16 h-16 object-contain" alt="Logo">
                <h1 class="text-xl md:text-2xl font-bold">KUESIONER STIKES NOTOKUSUMO YOGYAKARTA</h1>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex flex-col items-center py-10 px-4">
            <div class="bg-white shadow-xl rounded-3xl p-8 w-full max-w-7xl">
                <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center">📋 Silakan Pilih Kuesioner</h2>

                @if (session('success'))
                    <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-800 rounded-xl shadow">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <a href="{{ route('kuesioner.index') }}"
                       class="bg-blue-100 text-blue-900 border border-blue-300 rounded-xl p-6 font-semibold text-center transition hover:scale-105 hover:shadow-xl">
                        📘 <span class="block mt-2">1. Kuesioner Kepuasan Mahasiswa</span>
                        <span class="text-sm font-normal">Terhadap Kinerja Administrasi</span>
                    </a>

                    <a href="{{ route('kuesioner2.index') }}"
                       class="bg-green-100 text-green-900 border border-green-300 rounded-xl p-6 font-semibold text-center transition hover:scale-105 hover:shadow-xl">
                        👨‍💼 <span class="block mt-2">2. Kuesioner Kepuasan Terhadap</span>
                        <span class="text-sm font-normal">Pimpinan Stikes</span>
                    </a>

                    <a href="{{ route('kuesioner3.index') }}"
                       class="bg-yellow-100 text-yellow-900 border border-yellow-300 rounded-xl p-6 font-semibold text-center transition hover:scale-105 hover:shadow-xl">
                        👩‍🏫 <span class="block mt-2">3. Kuesioner Kepuasan Dosen</span>
                        <span class="text-sm font-normal">Terhadap Tenaga Kependidikan</span>
                    </a>

                    <a href="{{ route('kuesioner6.index') }}"
                       class="bg-red-100 text-red-900 border border-red-300 rounded-xl p-6 font-semibold text-center transition hover:scale-105 hover:shadow-xl">
                        🌐 <span class="block mt-2">4. Kuesioner Kepuasan</span>
                        <span class="text-sm font-normal">Mitra Kerja Sama</span>
                    </a>
                </div>

                <a href="{{ route('home') }}"
                   class="mt-10 px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-lg rounded-xl font-semibold transition hover:scale-105 hover:shadow-xl text-center block w-full max-w-xs mx-auto">
                    ← Kembali ke Beranda
                </a>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-200 text-black text-center py-4 text-sm mt-10">
            Copyright © 2025 - All rights reserved by STIKES Notokusumo
        </footer>
    </div>
</x-app-layout>
</html>
