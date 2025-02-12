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
    <div class="flex flex-col items-center gap-6 p-8 w-full max-w-4xl mx-auto">
        <!-- Header Section -->
        <p class="text-gray-600 text-center text-lg font-bold">Silakan isi kuesioner untuk memberikan penilaian dosen Terhadap layanan Tenaga Kependidikan</p>

        <!-- Tombol Aksi -->
        <div class="flex flex-col gap-4">

            <div class="w-full text-center text-lg font-semibold px-6 py-4 rounded-lg border-2 border-teal-600 text-teal-600 shadow-md">
                3. Kuesioner Kepuasan Dosen Terhadap layanan Tenaga Kependidikan
            </div>

            <!-- Button Section -->
            <div class="w-full flex flex-col gap-4">
            <a href="{{ route('kuesioner3.create') }}" class="block text-center font-semibold px-6 py-3 bg-green-600 text-white rounded-lg transition-all hover:bg-green-700 shadow-md">
                Mulai
            </a>
            <a href="{{ route('dashboard') }}" class="block text-center font-semibold px-6 py-3 bg-gray-600 text-white rounded-lg transition-all hover:bg-gray-700 shadow-md">
                Kembali
            </a>
            </div>
        </div>

        <div class="max-w-4xl mx-auto bg-white p-8 mt-10 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-center mb-6">Hasil Kuesioner Kepuasan</h2>
        
            <div class="bg-gray-100 p-4 rounded-md text-center">
                <h3 class="text-lg font-semibold">Rata-rata Kepuasan:</h3>
                <p class="text-2xl font-bold text-blue-600">{{ $rataRata ? round($rataRata, 2) : '-' }}</p>
        
                <h3 class="text-lg font-semibold mt-2">Kategori Kepuasan:</h3>
                <span class="text-xl font-bold px-4 py-2 rounded-lg text-white"
                      style="background-color: 
                      {{ $kategori == 'Sangat Tidak Setuju' ? '#DC2626' : 
                         ($kategori == 'Tidak Setuju' ? '#F59E0B' : 
                         ($kategori == 'Setuju' ? '#10B981' : '#3B82F6')) }};">
                    {{ $kategori }}
                </span>
            </div>
        </div>
    </div>

</body>
</html>
