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
        <div class="max-w-3xl mx-auto bg-white p-6 mt-10 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center mb-6">Kuesioner Kepuasan terhadap Kinerja Administrasi Para
                Tenaga Kependidikan</h2>
            <p class="text-center text-gray-600 mb-4">Silakan isi kuesioner berikut sesuai dengan pengalaman Anda.</p>
            <hr class="mb-4">

            <form action="{{ route('tendik.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="username" class="block text-lg font-semibold mb-2">Nama Anda:</label>
                    <input required type="text" id="username" name="username" placeholder="Masukkan Nama Anda"
                        class="w-full p-2 border rounded-md">
                </div>

                <hr class="mb-4">

                <div class="mb-4">
                    <p class="text-lg font-semibold">1. Prosedur pelayanan di BAA tidak berbelit-belit</p>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input required type="radio" name="q1" value="30" class="mr-2"> Sangat Tidak
                            Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q1" value="50" class="mr-2"> Tidak Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q1" value="75" class="mr-2"> Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q1" value="100" class="mr-2"> Sangat Setuju
                        </label>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="mb-4">
                    <p class="text-lg font-semibold">2. Proses pelayanan di BAA cepat dan tepat</p>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input required type="radio" name="q2" value="30" class="mr-2"> Sangat Tidak
                            Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q2" value="50" class="mr-2"> Tidak Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q2" value="75" class="mr-2"> Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q2" value="100" class="mr-2"> Sangat Setuju
                        </label>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="mb-4">
                    <p class="text-lg font-semibold">3. Staf BAA memberikan pelayanan yang memuaskan sesuai kebutuhan
                        mahasiswa </p>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input required type="radio" name="q3" value="30" class="mr-2"> Sangat Tidak
                            Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q3" value="50" class="mr-2"> Tidak Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q3" value="75" class="mr-2"> Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q3" value="100" class="mr-2"> Sangat Setuju
                        </label>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="mb-4">
                    <p class="text-lg font-semibold">4. Staf BAA menunjukkan disiplin kerja yang tinggi </p>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input required type="radio" name="q4" value="30" class="mr-2"> Sangat Tidak
                            Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q4" value="50" class="mr-2"> Tidak
                            Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q4" value="75" class="mr-2"> Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q4" value="100" class="mr-2"> Sangat
                            Setuju
                        </label>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="mb-4">
                    <p class="text-lg font-semibold">5. Prosedur penyampaian informasi sangat jelas dan mudah
                        dimengerti </p>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input required type="radio" name="q5" value="30" class="mr-2"> Sangat
                            Tidak Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q5" value="50" class="mr-2"> Tidak
                            Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q5" value="75" class="mr-2"> Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q5" value="100" class="mr-2"> Sangat
                            Setuju
                        </label>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="mb-4">
                    <p class="text-lg font-semibold">6. Staf BAA memiliki kemampuan,sikap yang sopan,ramah, dan dapat
                        dipercaya </p>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input required type="radio" name="q6" value="30" class="mr-2"> Sangat
                            Tidak Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q6" value="50" class="mr-2"> Tidak
                            Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q6" value="75" class="mr-2"> Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q6" value="100" class="mr-2"> Sangat
                            Setuju
                        </label>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="mb-4">
                    <p class="text-lg font-semibold">7. Staf BAA tidak membiarkan mahasiswa menunggu antrian terlalu
                        lama</p>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input required type="radio" name="q7" value="30" class="mr-2"> Sangat
                            Tidak Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q7" value="50" class="mr-2"> Tidak
                            Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q7" value="75" class="mr-2"> Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q7" value="100" class="mr-2"> Sangat
                            Setuju
                        </label>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="mb-4">
                    <p class="text-lg font-semibold">8. Komunikasi staf BAA dengan mahasiswa berjalan dengan baik dan
                        lancar</p>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input required type="radio" name="q8" value="30" class="mr-2"> Sangat
                            Tidak Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q8" value="50" class="mr-2"> Tidak
                            Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q8" value="75" class="mr-2"> Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q8" value="100" class="mr-2"> Sangat
                            Setuju
                        </label>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="mb-4">
                    <p class="text-lg font-semibold">9. Staf BAA memberikan perlakuan yang adil kepada semua mahasiswa
                    </p>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input required type="radio" name="q9" value="30" class="mr-2"> Sangat
                            Tidak Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q9" value="50" class="mr-2"> Tidak
                            Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q9" value="75" class="mr-2"> Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q9" value="100" class="mr-2"> Sangat
                            Setuju
                        </label>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="mb-4">
                    <p class="text-lg font-semibold">10. Staf BAA memberikan pelayanan yang memuaskan sesuai kebutuhan
                        mahasiswa </p>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input required type="radio" name="q10" value="30" class="mr-2"> Sangat
                            Tidak Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q10" value="50" class="mr-2"> Tidak
                            Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q10" value="75" class="mr-2"> Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q10" value="100" class="mr-2"> Sangat
                            Setuju
                        </label>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="mb-4">
                    <p class="text-lg font-semibold">11. Ruang pelayanan dan ruang tunggu di BAA sangat rapi, bersih,
                        serta nyaman </p>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input required type="radio" name="q11" value="30" class="mr-2"> Sangat
                            Tidak Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q11" value="50" class="mr-2"> Tidak
                            Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q11" value="75" class="mr-2"> Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q11" value="100" class="mr-2"> Sangat
                            Setuju
                        </label>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="mb-4">
                    <p class="text-lg font-semibold">12. Staf BAA berpenampilan rapi dan sopan</p>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input required type="radio" name="q12" value="30" class="mr-2"> Sangat
                            Tidak Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q12" value="50" class="mr-2"> Tidak
                            Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q12" value="75" class="mr-2"> Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q12" value="100" class="mr-2"> Sangat
                            Setuju
                        </label>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="mb-4">
                    <p class="text-lg font-semibold">13. Sistem informasi (komputerisasi) yang ada di BAA dapat
                        digunakan dengan maksimal oleh Staf BAA </p>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input required type="radio" name="q13" value="30" class="mr-2"> Sangat
                            Tidak Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q13" value="50" class="mr-2"> Tidak
                            Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q13" value="75" class="mr-2"> Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q13" value="100" class="mr-2"> Sangat
                            Setuju
                        </label>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="mb-4">
                    <p class="text-lg font-semibold">14. Kemudahan bagi mahasiswa untuk memperoleh layanan dari staf
                        BAA pada saat jam kerja </p>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input required type="radio" name="q14" value="30" class="mr-2"> Sangat
                            Tidak Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q14" value="50" class="mr-2"> Tidak
                            Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q14" value="75" class="mr-2"> Setuju
                        </label>
                        <label class="flex items-center">
                            <input required type="radio" name="q14" value="100" class="mr-2"> Sangat
                            Setuju
                        </label>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="mt-4 flex justify-between">
                    <a href="{{ route('home') }}"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold transition hover:bg-blue-700 text-center">
                        Kembali
                    </a>

                    <button type="submit" class="bg-green-500 text-white rounded-md hover:opacity-70 px-4 py-2">
                        Selesai
                    </button>
                </div>
            </form>
        </div>
    </x-app-layout>
</body>

</html>
