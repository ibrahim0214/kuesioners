<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner4;
use Illuminate\Http\Request;
use App\Traits\RedirectAfterSubmit;

class Kuesioner4Controller extends Controller
{
    use RedirectAfterSubmit;

    public function index()
    {
        $kuesioner4s = Kuesioner4::all();

        $totalNilai = $kuesioner4s->sum('score');
        $jumlahResponden = $kuesioner4s->count();
        $rataRata = $jumlahResponden > 0 ? $totalNilai / ($jumlahResponden * 8) : 0;

        $kategori = $this->hitungKategori($rataRata);

        return view('kuesioner4.index', compact('kuesioner4s', 'kategori', 'rataRata'));
    }

    public function create()
    {
        $questions = [
            "Perencanaan PkM yang dilakukan oleh dosen STIKES Notokusumo telah sesuai dengan kebutuhan para mitra",				
            "Perencanaan PkM telah dilakukan sesuai standar K3 bagi mitra", 				
            "Pelaksanaan PkM dilakukan sesuai kaidah metode ilmiah",				
            "Pelaksanaan PkM dilakukan dengan memperhatikan K3", 				 				
            "Hasil PkM sesuai dengan perencanaan PkM",  				
            "Hasil PkM sesuai dengan Solusi yang diharapkan oleh mitra",				
            "Hasil PkM dapat dimanfaatkan secara maksimal",				
            "Pendanaan PkM telah dirasakan cukup memadai bila dibandingkan dengan hasil yang diharapkan"	
        ];

        return view('kuesioner4.create', compact('questions'));
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

        Kuesioner4::create($validatedData);

        return redirect()->route('kuesioner4.index')->with('success', 'Kuesioner4 berhasil ditambahkan.');
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
