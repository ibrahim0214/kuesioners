
<!-- Table Section -->
<section class="flex flex-col items-center py-10 px-4">
    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-3xl overflow-x-auto">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Hasil Kuesioner</h2>
        <table class="w-full border border-gray-300 text-gray-700">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2">Username</th>
                    <th class="border px-4 py-2">Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tendik as $t)
                    <tr class="text-center">
                        <td class="border px-4 py-2">{{ $t->username ?? '-' }}</td>
                        <td class="border px-4 py-2">{{ $t->score ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>