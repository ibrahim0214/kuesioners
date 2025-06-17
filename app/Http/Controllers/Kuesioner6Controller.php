<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner6;
use Illuminate\Http\Request;

class Kuesioner6Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kuesioner6s = Kuesioner6::all();
        $totalNilai = $kuesioner6s->sum('score');
        $jumlahResponden = $kuesioner6s->count();
        $rataRata = $jumlahResponden > 0 ? $totalNilai / ($jumlahResponden * 5) : 0;
        $kategori = $this->hitungKategori($rataRata);

        return view('kuesioner6.index', compact('kuesioner6s', 'kategori', 'rataRata'));
    }

    public function create()
    {
        $questions = [
            "Apakah staff kerjasama STIKES Notokusumo merespon pada kebutuhan anda dengan tepat dan profesional?",
            "Apakah STIKES Notokusumo Yogyakarta telah memberikan dampingan yang terbaik untuk memenuhi kebutuhan anda?",
            "Apakah kerjasama ini telah sesuai dengan harapan anda?",
            "Apakah anda mendapatkan hal yang berguna dari kerjasama antara anda/institusi anda dengan STIKES Notokusumo Yogyakarta?",
            "Apakah anda ingin kembali ke STIKES Notokusumo Yogyakarta di masa mendatang untuk kerjasama/acara lain?",
        ];

        return view('kuesioner6.create', compact('questions'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'nama_institusi' => 'required',
            'bidang' => 'required|array|min:1',
            'bidang.*' => 'in:pendidikan,penelitian,pengabdian kpd masyarakat',
            'q1' => 'required|numeric',
            'q2' => 'required|numeric',
            'q3' => 'required|numeric',
            'q4' => 'required|numeric',
            'q5' => 'required|numeric',
            'saran' => 'required',
        ]);

        $totalSkor = 0;
        for ($i = 1; $i <= 5; $i++) {
            $totalSkor += $validatedData["q{$i}"];
        }

        $validatedData['score'] = $totalSkor;
        $validatedData['bidang'] = implode(', ', $validatedData['bidang']);

        Kuesioner6::create($validatedData);

        $map = [
            'pendidikan' => 'kuesioner7.create',
            'penelitian' => 'kuesioner5.create',
            'pengabdian kpd masyarakat' => 'kuesioner4.create',
        ];

        $redirects = [];
        foreach ($request->bidang as $bidang) {
            if (isset($map[$bidang])) {
                $redirects[] = $map[$bidang];
            }
        }

        session([
            'kuesioner_redirects' => $redirects,
            'bidang_kerjasama' => $request->bidang
        ]);

        return redirect()->route($redirects[0] ?? 'dashboard')
                         ->with('success', 'Kuesioner berhasil dikirim. Anda diarahkan ke halaman berikutnya.');
    }

    public function hitungKategori()
    {
        $nilaiResponden = Kuesioner6::pluck('score')->toArray();
        $jumlahResponden = count($nilaiResponden);
        $jumlahPertanyaan = 5;

        if ($jumlahResponden > 0) {
            $totalSkor = array_sum($nilaiResponden);
            $totalJawaban = $jumlahResponden * $jumlahPertanyaan;
            $rataRata = $totalSkor / $totalJawaban;

            if ($rataRata >= 1.00 && $rataRata < 1.80) {
                return "Sangat Tidak Setuju";
            } elseif ($rataRata >= 1.80 && $rataRata < 2.60) {
                return "Tidak Setuju";
            } elseif ($rataRata >= 2.60 && $rataRata < 3.40) {
                return "Netral";
            } elseif ($rataRata >= 3.40 && $rataRata < 4.20) {
                return "Setuju";
            } else {
                return "Sangat Setuju";
            }
        }

        return "Belum Ada Responden";
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
