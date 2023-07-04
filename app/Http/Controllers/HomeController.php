<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Suplemen;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil Semua Data Seplumen pada Database
        $suplements = Suplemen::all();
        // Mengambil Semua Data Bobots pada Database
        $kriteria = Bobot::all();

        $spkSaw = new SAWController();
        // Mengambil data Saw yang telah dihtiung
        $saw = $spkSaw->preferensi();
        // Merangkingkan data Saw 
        $perangkingan = collect($spkSaw->preferensi())->sortByDesc('nilai')->values()->all();
        // Merender view
        return view('layouts.landing', compact('suplements', 'kriteria', 'saw', 'perangkingan'));
    }
}
