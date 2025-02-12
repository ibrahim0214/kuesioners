<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner3;
use Illuminate\Http\Request;

class Kuesioner3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kuesioner3s = Kuesioner3::all();
    
    // Hitung rata-rata nilai kepuasan
    $totalNilai = $kuesioner3s->sum('score');
    $jumlahResponden = $kuesioner3s->count();
    
    $rataRata = $jumlahResponden > 0 ? $totalNilai / ($jumlahResponden * 15) : 0; // Dibagi jumlah pertanyaan (15)

    // Tentukan kategori berdasarkan rata-rata
    $kategori = $this->hitungKategori($rataRata);

    return view('kuesioner3.index', compact('kuesioner3s', 'kategori', 'rataRata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $questions = [
        "Prosedur pelayanan di BAA tidak berbelit-belit",				
        "Proses pelayanan di BAA cepat dan tepat", 				
        "Kesediaan staf BAA membantu kesulitan dosen dalam kegiatan PBM",				
        "Staf BAA menunjukkan disiplin kerja yang tinggi", 				
        "Prosedur penyampaian informasi sangat jelas dan mudah dimengerti", 				
        "Staf BAA memiliki kemampuan,sikap yang sopan,ramah, dan dapat dipercaya",  				
        "Staf BAA tidak membiarkan dosen menunggu terlalu lama dalam memperoleh layanan",				
        "Komunikasi staf BAA dengan dosen berjalan dengan baik dan lancar",				
        "Terjaminnya keamanan data akademik dosen",				
        "Keakuratan data informasi yang diberikan kepada dosen",				
        "Ruang pelayanan dan ruang tunggu di BAA sangat rapi, bersih, serta nyaman", 				
        "Staf BAA berpenampilan rapi dan sopan",				
        "Sistem informasi (komputerisasi) yang ada di BAA dapat digunakan dengan maksimal oleh Staf BAA",				
        "Kemudahan bagi dosen untuk memperoleh layanan dari staf BAA pada saat jam kerja", 				
        "Staf BAA mampu mengoperasikan peralatan sistem informasi yang ada dengan maksimal untuk menunjang kinerja bagian administrasi"
        				
        ];

        // return view('kuesioner.create');
        return view('kuesioner3.create', compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'prodi' => 'required',
            'q1' => 'required|numeric',
            'q2' => 'required|numeric',
            'q3' => 'required|numeric',
            'q4' => 'required|numeric',
            'q5' => 'required|numeric',
            'q6' => 'required|numeric',
            'q7' => 'required|numeric',
            'q8' => 'required|numeric',
            'q9' => 'required|numeric',
            'q10' => 'required|numeric',
            'q11' => 'required|numeric',
            'q12' => 'required|numeric',
            'q13' => 'required|numeric',
            'q14' => 'required|numeric',
            'q15' => 'required|numeric',
        ]);

        // Hitung total score dengan benar
        $totalSkor = 0;
        for ($i = 1; $i <= 15; $i++) {
        $totalSkor += $validatedData["q{$i}"];
        }

        $validatedData['score'] = $totalSkor; // Simpan total skor

        Kuesioner3::create($validatedData);

        return redirect()->route('kuesioner3.index')->with('success', 'Kuesioner3 berhasil ditambahkan.');
    }

    public function hitungKategori()
    {
        $nilaiResponden = Kuesioner3::pluck('score')->toArray(); 
        $jumlahResponden = count($nilaiResponden);
        $jumlahPertanyaan = 15; // Sesuai jumlah pertanyaan di kuesioner

    if ($jumlahResponden > 0) {
        // Total semua nilai dari semua responden
        $totalSkor = array_sum($nilaiResponden);
        
        // Hitung total jawaban yang diberikan
        $totalJawaban = $jumlahResponden * $jumlahPertanyaan;
        
        // Rata-rata nilai per pertanyaan
        $rataRata = $totalSkor / $totalJawaban;

        // Tentukan kategori berdasarkan rata-rata
        if ($rataRata >= 1.00 && $rataRata < 1.75) {
            return "Sangat Tidak Setuju";
        } elseif ($rataRata >= 1.75 && $rataRata < 2.5) {
            return "Tidak Setuju";
        } elseif ($rataRata >= 2.5 && $rataRata < 3.5) {
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
