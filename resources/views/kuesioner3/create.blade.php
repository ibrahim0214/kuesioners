<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuesioner Kepuasan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <x-app-layout>
        <div class="max-w-4xl mx-auto bg-white p-8 mt-10 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-center mb-6">Kuesioner Kepuasan</h2>
            <p class="text-center text-gray-600 mb-6">Silakan isi kuesioner berikut sesuai dengan pengalaman.</p>
            
            <form action="{{ route('kuesioner3.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div>
                    <label for="username" class="block text-lg font-semibold mb-2">Nama :</label>
                    <input required type="text" id="username" name="username" placeholder="Masukkan Nama"
                        class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="prodi" class="block text-lg font-semibold mb-2">Prodi :</label>
                    <input required type="text" id="prodi" name="prodi" placeholder="Masukkan Prodi"
                        class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <hr>
                
                @foreach(range(1, 15) as $index)
                <div>
                    <p class="text-lg font-semibold">{{ $index }}. {{ $questions[$index - 1] }}</p>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-2">
                        @foreach([1 => 'Sangat Tidak Setuju', 2 => 'Tidak Setuju', 3 => 'Setuju', 4 => 'Sangat Setuju'] as $value => $label)
                        <label class="flex items-center gap-2">
                            <input required type="radio" name="q{{ $index }}" value="{{ $value }}" class="form-radio text-blue-500">
                            {{ $label }}
                        </label>
                        @endforeach
                    </div>
                </div>
                <hr>
                @endforeach
                
                <div class="mt-6 flex justify-between">
                    <a href="{{ route('dashboard') }}"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold transition hover:bg-blue-700 text-center">
                        Kembali
                    </a>
                    <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-md font-semibold transition hover:bg-green-600">
                        Selesai
                    </button>
                </div>
            </form>
        </div>
    </x-app-layout>
</body>
</html>
