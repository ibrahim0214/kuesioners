<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuesioner Kerja Sama</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <x-app-layout>
        <div class="max-w-4xl mx-auto bg-white p-8 mt-10 rounded-lg shadow-lg">

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 text-center">
                    {{ session('success') }}
                </div>
            @endif

            <h2 class="text-3xl font-bold text-center mb-6">Kuesioner Kerja Sama</h2>
            <p class="text-center text-gray-600 mb-6">Silakan isi kuesioner berikut sesuai dengan pengalaman Anda.</p>

            <form action="{{ route('kuesioner6.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="username" class="block text-lg font-semibold mb-2">Nama:</label>
                    <input required type="text" id="username" name="username" placeholder="Contoh: Rizky"
                        value="{{ old('username') }}"
                        class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="nama_institusi" class="block text-lg font-semibold mb-2">Nama Institusi:</label>
                    <input required type="text" id="nama_institusi" name="nama_institusi" placeholder="Contoh: Puskesmas Tegalrejo"
                        value="{{ old('nama_institusi') }}"
                        class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block text-lg font-semibold mb-2">
                        Dalam bidang apa anda terlibat kerja sama? <br>
                        <span class="text-sm italic text-gray-600">
                            What is the point of collaboration between you/your institution and STIKES Notokusumo Yogyakarta?
                        </span>
                        <span class="text-red-500">*</span>
                    </label>
                    <div class="space-y-2">
                        @foreach (['pendidikan', 'penelitian', 'pengabdian kpd masyarakat'] as $value)
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="bidang[]" value="{{ $value }}"
                                    class="form-checkbox text-blue-500"
                                    {{ is_array(old('bidang')) && in_array($value, old('bidang')) ? 'checked' : '' }}>
                                {{ ucfirst($value) }}
                            </label>
                        @endforeach
                    </div>
                </div>

                <hr>

                @foreach(range(1, 5) as $index)
                    <div>
                        <p class="text-lg font-semibold">{{ $index }}. {{ $questions[$index - 1] }}</p>
                        <div class="grid grid-cols-1 sm:grid-cols-5 gap-4 mt-2">
                            @foreach([
                                1 => 'Sangat Tidak Setuju',
                                2 => 'Tidak Setuju',
                                3 => 'Netral',
                                4 => 'Setuju',
                                5 => 'Sangat Setuju'
                            ] as $value => $label)
                                <label class="flex items-center gap-2">
                                    <input required type="radio" name="q{{ $index }}" value="{{ $value }}"
                                        class="form-radio text-blue-500"
                                        {{ old("q{$index}") == $value ? 'checked' : '' }}>
                                    {{ $label }}
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <hr>
                @endforeach

                <div>
                    <label for="saran" class="block text-lg font-semibold mb-2">
                        Tuliskan saran Anda untuk kemajuan kami
                        <br><span class="italic text-sm">Write down your suggestion for our improvement.</span>
                        <span class="text-red-500">*</span>
                    </label>
                    <textarea required name="saran" id="saran" rows="4" placeholder="Jawaban Anda"
                        class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('saran') }}</textarea>
                </div>

                <div class="mt-6 flex justify-between">
                    <a href="{{ route('dashboard') }}"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold transition hover:bg-blue-700 text-center">
                        Kembali
                    </a>
                    <button type="submit"
                        class="px-4 py-2 bg-green-500 text-white rounded-md font-semibold transition hover:bg-green-600">
                        Selesai
                    </button>
                </div>
            </form>
        </div>
    </x-app-layout>
</body>

</html>
