<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner5;
use Illuminate\Http\Request;
use App\Traits\RedirectAfterSubmit;

class Kuesioner5Controller extends Controller
{
    use RedirectAfterSubmit;

    public function index()
    {
        $kuesioner5s = Kuesioner5::all();

        $totalNilai = $kuesioner5s->sum('score');
        $jumlahResponden = $kuesioner5s->count();
        $rataRata = $jumlahResponden > 0 ? $totalNilai / ($jumlahResponden * 8) : 0;

        $kategori = $this->hitungKategori($rataRata);

        return view('kuesioner5.index', compact('kuesioner5s', 'kategori', 'rataRata'));
    }

    public function create()
    {
        $questions = [
            "Perencanaan penelitian yang dilakukan oleh dosen STIKES Notokusumo telah sesuai dengan kebutuhan para mitra",				
            "Perencanaan penelitian telah dilakukan sesuai standar K3 bagi mitra", 				
            "Pelaksanaan penelitian dilakukan sesuai kaidah metode ilmiah",				
            "Pelaksanaan penelitian dilakukan dengan memperhatikan K3", 				
            "Hasil penelitian sesuai dengan perencanaan penelitian", 				
            "Hasil penelitian sesuai dengan Solusi yang diharapkan oleh mitra",				
            "Hasil penelitian dapat dimanfaatkan secara maksimal",				
            "Pendanaan penelitian telah dirasakan cukup memadai bila dibandingkan dengan hasil yang diharapkan"	
        ];

        return view('kuesioner5.create', compact('questions'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_mitra' => 'required',
            'username' => 'required',
            'jabatan' => 'required',
            'q1' => 'required|numeric',
            'q2' => 'required|numeric',
            'q3' => 'required|numeric',
            'q4' => 'required|numeric',
            'q5' => 'required|numeric',
            'q6' => 'required|numeric',
            'q7' => 'required|numeric',
            'q8' => 'required|numeric',
        ]);

        $totalSkor = array_sum(array_map(function ($key) use ($validatedData) {
            return $validatedData[$key];
        }, ['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8']));

        $validatedData['score'] = $totalSkor;

        Kuesioner5::create($validatedData);

        return redirect()->route('kuesioner5.index')->with('success', 'Kuesioner5 berhasil ditambahkan.');
    }

    protected function hitungKategori($rataRata)
    {
        if ($rataRata >= 1.00 && $rataRata < 1.75) {
            return "Tidak Puas";
        } elseif ($rataRata >= 1.75 && $rataRata < 2.5) {
            return "Cukup Puas";
        } elseif ($rataRata >= 2.5) {
            return "Puas";
        }

        return "Belum Ada Responden";
    }
}
