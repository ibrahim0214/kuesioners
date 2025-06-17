<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner7;
use Illuminate\Http\Request;
use App\Traits\RedirectAfterSubmit;

class Kuesioner7Controller extends Controller
{
    use RedirectAfterSubmit;

    public function index()
    {
        $kuesioner7s = Kuesioner7::all();

        $totalNilai = $kuesioner7s->sum('score');
        $jumlahResponden = $kuesioner7s->count();
        $rataRata = $jumlahResponden > 0 ? $totalNilai / ($jumlahResponden * 8) : 0;

        $kategori = $this->hitungKategori($rataRata);

        return view('kuesioner7.index', compact('kuesioner7s', 'kategori', 'rataRata'));
    }

    public function create()
    {
        $questions = [
            "Kemudahan komunikasi dan koordinasi antara mitra (RS, klinik, apotik, industri)* dengan STIKES Notokusumo Yogyakarta",				
            "Terdapat perencanaan kegiatan sebelum program kegiatan dilaksanaakan", 				
            "Kejelasan perjanjian kerjasama bidang Pendidikan antara STIKES Notokusumo Yogyakarta dengan mitra (MoU/MoA/PKS/IA)",				
            "Kesesuaian kompetensi mahasiswa dengan kebutuhan mitra", 				
            "Kejelasan peran dan tanggung jawab masing-masing pihak dalam pelaksanaan kerja sama pada bidang pendidikan", 				
            "Terdapat dampak positif terhadap  program kegiatan bidang pendidikan yang terlaksana  antara STIKES Notokusumo Yogyakarta  dengan mitra",				
            "Dilakukan evaluasi dan tindak lanjut setelah pelaksanaan program kerjasama bidang pendidikan yang terlaksana",				
            "Kepuasan mitra pendidikan (RS, klinik, apotik, industri)* secara umum sehingga ada tindaklanjut untuk memperluas kerja sama dengan STIKES Notokusumo  Yogyakarta di bidang Pendidikan"	
        ];

        return view('kuesioner7.create', compact('questions'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
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

        Kuesioner7::create($validatedData);

        return redirect()->route('kuesioner7.index')->with('success', 'Kuesioner7 berhasil ditambahkan.');
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

