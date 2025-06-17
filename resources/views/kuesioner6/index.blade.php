<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuesioner Kepuasan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Arial', sans-serif; background-color: #f4f4f9; }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-blue-600 text-white py-2 px-8 shadow-md flex justify-between items-center">
        <div class="flex items-center gap-4">
            <img src="/asset/logo1.png" class="w-16 h-16 object-contain" alt="Logo">
            <h1 class="text-xl md:text-2xl font-bold">KUESIONER STIKES NOTOKUSUMO YOGYAKARTA</h1>
        </div>
    </nav>

    <!-- Container Utama -->
    <div class="flex flex-col items-center gap-6 p-8 w-full max-w-5xl mx-auto">
        <!-- Header Section -->
        <p class="text-gray-600 text-center text-lg font-bold">Silakan isi kuesioner untuk memberikan penilaian kepuasan mitra kerja sama</p>

        <!-- Info Judul -->
        <div class="w-full text-center text-lg font-semibold px-6 py-4 rounded-xl border-2 border-teal-600 text-teal-600 shadow-md bg-white">
            4. KUESIONER KEPUASAN MITRA KERJA SAMA
        </div>

        <!-- Tombol Aksi -->
        <div class="w-full flex flex-col md:flex-row gap-4 justify-center">
            <a href="{{ route('kuesioner6.create') }}"
               class="w-full md:w-40 text-center font-semibold px-6 py-3 bg-green-600 text-white rounded-xl transition hover:scale-105 hover:bg-green-700 shadow-md">
                Mulai
            </a>
            <a href="{{ route('dashboard') }}"
               class="w-full md:w-40 text-center font-semibold px-6 py-3 bg-gray-600 text-white rounded-xl transition hover:scale-105 hover:bg-gray-700 shadow-md">
                Kembali
            </a>
        </div>

        <!-- Navigasi ke Kuesioner Lanjutan -->
        <div class="w-full mt-10">
            <h3 class="text-center text-xl font-bold mb-6 text-gray-800">Pilih Bidang Kerja Sama</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="{{ route('kuesioner4.index') }}"
                   class="bg-purple-100 text-purple-900 border border-purple-300 rounded-xl p-6 font-semibold text-center transition hover:scale-105 hover:shadow-xl">
                    🤝 Kuesioner PKM 
                </a>
                <a href="{{ route('kuesioner5.index') }}"
                   class="bg-pink-100 text-pink-900 border border-pink-300 rounded-xl p-6 font-semibold text-center transition hover:scale-105 hover:shadow-xl">
                    🧪 Kuesioner Penelitian 
                </a>
                <a href="{{ route('kuesioner7.index') }}"
                   class="bg-indigo-100 text-indigo-900 border border-indigo-300 rounded-xl p-6 font-semibold text-center transition hover:scale-105 hover:shadow-xl">
                    📅 Kuesioner Pendidikan 
                </a>
            </div>
        </div>

        <!-- Hasil Kuesioner -->
        <div class="max-w-4xl w-full bg-white p-8 mt-12 rounded-xl shadow-lg">
            <h2 class="text-3xl font-bold text-center mb-6 text-gray-800">Hasil Kuesioner Kepuasan</h2>

            <div class="bg-gray-100 p-6 rounded-xl text-center">
                <h3 class="text-lg font-semibold mb-1">Rata-rata Kepuasan:</h3>
                <p class="text-2xl font-bold text-blue-600">{{ $rataRata ? round($rataRata, 2) : '-' }}</p>

                <h3 class="text-lg font-semibold mt-4 mb-1">Kategori Kepuasan:</h3>
                <span class="text-xl font-bold px-6 py-2 rounded-xl text-white inline-block"
                      style="background-color: 
                      {{ $kategori == 'Sangat Tidak Setuju' ? '#DC2626' : 
                         ($kategori == 'Tidak Setuju' ? '#F59E0B' : 
                         ($kategori == 'Netral' ? '#D97706' : 
                         ($kategori == 'Setuju' ? '#10B981' : '#2563EB'))) }};">
                    {{ $kategori }}
                </span>
            </div>
        </div>
    </div>
</body>
</html>
