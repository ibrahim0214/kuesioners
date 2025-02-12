<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner2;
use Illuminate\Http\Request;

class Kuesioner2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kuesioner2s = Kuesioner2::all();
    
    // Hitung rata-rata nilai kepuasan
    $totalNilai = $kuesioner2s->sum('score');
    $jumlahResponden = $kuesioner2s->count();
    
    $rataRata = $jumlahResponden > 0 ? $totalNilai / ($jumlahResponden * 15) : 0; // Dibagi jumlah pertanyaan (15)

    // Tentukan kategori berdasarkan rata-rata
    $kategori = $this->hitungKategori($rataRata);

    return view('kuesioner2.index', compact('kuesioner2s', 'kategori', 'rataRata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

        $questions = [
        "Pimpinan selalu mengungkapkan sesuatu sesuai dengan fakta",				
        "Pimpinan bersikap konsisten antara ucapan dan tindakan dalam menegakkan aturan", 				
        "Pimpinan mengemukakan pandangan secara objektif",				
        "Pimpinan mampu menghadapi tekanan yang tidak sesuai dengan nilai-nilai moral yang dimiliki",				
        "Pimpinan berani mengambil keputusan tegas yang diperlukan berdasarkan pertimbanhgan yang masak", 				
        "Pimpinan berani mengambil resiko di dalam mengambil keputusan", 				
        "Pimpinan bertindak adil di dalam mengambil keputusan terkait pemberlakuan sanksi bagi karyawan yang melanggar aturan",				
        "Pimpinan selalu menimbang dengan cermat setiap keputusan yang diambil berikut dengan resikonya", 				
        "Pimpinan selalu memberikan solusi terhadap masalah terkait dengan pekerjaan", 				
        "Pimpinan selalu meminta dan mendengarkan pendapat beberapa pihak sebelum mengambil keputusan", 				
        "Pimpinan selalu melihat persoalan secara proporsional tidak membebankan kepada satu orang",				
        "Pimpinan memberikan arahan berupa penjelasan bagaimana melaksanakan pekerjaan dengan baik",				
        "Pimpinan peduli terhadap tugas bawahan sebagai bagian dari tanggung jawabnya", 				
        "Pimpinan berusaha mencari solusi atas berbagai masalah institusi",				
        "Pimpinan mampu menetapkan skala  prioritas terhadap persoalan program atau agenda institusi"
        				
        ];

        // return view('kuesioner.create');
        return view('kuesioner2.create', compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'jabatan_pengisi' => 'required',
            'username_dinilai' => 'required',
            'jabatan_dinilai' => 'required',
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

        Kuesioner2::create($validatedData);

        return redirect()->route('kuesioner2.index')->with('success', 'Kuesioner2 berhasil ditambahkan.');
    
    }

    public function hitungKategori()
    {
        $nilaiResponden = Kuesioner2::pluck('score')->toArray(); 
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
