<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kuesioner STIKES Notokusumo</title>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-blue-600 text-white py-2 px-8 flex justify-between items-center shadow-md">
        <div class="flex items-center gap-4">
            <img src="/asset/logo1.png" class="w-12 h-12 md:w-16 md:h-16 object-contain" alt="Logo">
            <div class="text-lg md:text-2xl font-bold">KUESIONER STIKES NOTOKUSUMO YOGYAKARTA</div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex flex-1 justify-center items-center px-6 py-12">
        <div class="max-w-4xl w-full bg-white rounded-lg shadow-lg p-10 flex flex-col md:flex-row items-center gap-8">
            <!-- Left Content -->
            <div class="text-center md:text-left flex-1">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Selamat Datang di,</h1>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Sistem Informasi <span class="text-blue-600">KUESIONER</span> STIKES Notokusumo Online</h2>
                <p class="text-gray-600 mb-6">Kuesioner kini bisa dilakukan di mana saja, kapan saja, secara online. Tanpa perlu kertas.</p>
                <a href="{{ route('dashboard') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 transition">Ikut Kuesioner Sekarang!</a>
            </div>
            <!-- Right Content (Image) -->
            <div class="flex-1 flex justify-center">
                <img src="/asset/quis.png" alt="Logo" class="w-48 md:w-64 lg:w-80 object-contain">
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200 text-black text-center py-4 text-sm">
        Copyright © 2025 - All rights reserved by STIKES Notokusumo
    </footer>
</body>
</html>
