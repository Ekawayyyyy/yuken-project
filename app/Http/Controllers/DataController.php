<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datakeuangan; // Pastikan Anda memiliki model untuk data keuangan

class DataController extends Controller
{
    public function keuangan(Request $request)
    {
        $validatedData = $request->validate([
            'tahun' => 'required|numeric',
            'pendapatan_tahunan' => 'required|numeric',
            'laba_bersih' => 'required|numeric',
            'rasio_utang' => 'required|numeric',
            'tingkat_resiko' => 'required|string',
        ]);

        DataKeuangan::create($validatedData);

        return redirect()->back()->with('success', 'Data Keuangan berhasil ditambahkan.');
    }

    public function index()
    {
        $datakeuangans = DataKeuangan::all();
        return view('pages.add', compact('datakeuangans'));
    }
}

?>