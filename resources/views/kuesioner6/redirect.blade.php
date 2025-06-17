<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 flex flex-col items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow text-center">
        <h1 class="text-xl font-bold mb-4 text-blue-700">Terima kasih!</h1>
        <p class="mb-6 text-gray-700">Anda telah memilih bidang kerja sama: 
            <strong>{{ is_array($bidang) ? implode(', ', $bidang) : $bidang }}</strong>.
        </p>
        <p class="mb-6 text-gray-600">Anda akan diarahkan ke halaman kuesioner berikutnya.</p>
        <p class="text-sm text-gray-400">Jika tidak diarahkan otomatis, klik tombol berikut:</p>
        <a href="{{ $nextUrl }}" class="mt-2 inline-block px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
            Lanjutkan
        </a>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = @json($nextUrl);
        }, 8000); // redirect dalam 8 detik
    </script>
</body>
</html>
