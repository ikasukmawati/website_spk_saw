<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Suplemen;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SAWController extends Controller
{
    public function normalization()
    {
        $suplements = [];
        $minHarga = Suplemen::min('harga');
        $maxBerat = Suplemen::max('berat');
        $maxVitA = Suplemen::max('jml_vitamin_a');
        $maxVitB = Suplemen::max('jml_vitamin_b');
        $maxVitC = Suplemen::max('jml_vitamin_c');

        foreach (Suplemen::all() as $data) {
            $arr = [];
            $arr['id'] = $data->id;
            $arr["nama"] = $data->nama;
            if ($data->harga) {
                $arr["harga"] = $minHarga / $data->harga;
            }
            $arr["berat"] = $data->berat / $maxBerat;
            $arr["jml_vitamin_a"] = $data->jml_vitamin_a / $maxVitA;
            $arr["jml_vitamin_b"] = $data->jml_vitamin_b / $maxVitB;
            $arr["jml_vitamin_c"] = $data->jml_vitamin_c / $maxVitC;
            array_push($suplements, $arr);
        }
        // dd($suplements);
        return $suplements;
    }

    public function get_view_normalization()
    {
        $suplements = $this->normalization();
        return view('layouts.admin.normalisasi', compact('suplements'));
    }

    public function preferensi(): array
    {

        $suplements = $this->normalization();

        $suplementsBaru = [];


        $c1 = Bobot::where('key', 'c1')->first();
        $c2 = Bobot::where('key', 'c2')->first();
        $c3 = Bobot::where('key', 'c3')->first();
        $c4 = Bobot::where('key', 'c4')->first();
        $c5 = Bobot::where('key', 'c5')->first();

        foreach ($suplements as $value) {

            $arr = [];
            $arr['id'] = $value['id'];
            $arr['nama'] = $value['nama'];
            $arr['harga'] = $value['harga'] * $c1->bobot;
            $arr['berat'] = $value["berat"] * $c2->bobot;
            $arr['jml_vitamin_a'] = $value["jml_vitamin_a"] * $c3->bobot;
            $arr['jml_vitamin_b'] = $value["jml_vitamin_b"] * $c4->bobot;
            $arr['jml_vitamin_c'] = $value["jml_vitamin_c"] * $c5->bobot;

            $arr['nilai'] = $arr['harga'] + $arr['berat'] + $arr['jml_vitamin_a'] + $arr['jml_vitamin_b'] + $arr['jml_vitamin_c'];

            array_push($suplementsBaru, $arr);
        }
        return $suplementsBaru;
    }
    public function get_view_preferensi()
    {
        $suplements = $this->preferensi();
        // dd($suplements);
        return view('layouts.admin.preferensi', compact('suplements'));
    }
}
