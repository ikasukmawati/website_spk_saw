<?php

namespace App\Http\Controllers;
use App\Models\Suplemen;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $suplements = Suplemen::latest()->paginate(10);
        return view('layouts.admin.index', compact('suplements'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'berat' => 'required|numeric',
            'jml_vitamin_a' => 'required|numeric',
            'jml_vitamin_b' => 'required|numeric',
            'jml_vitamin_c' => 'required|numeric'
        ]);

        Suplemen::create($request->all());
        return redirect()->route('admin')->with('success', 'Tambah suplemen berhasil');
    }

    public function update(Request $request, Suplemen $suplemen) {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'berat' => 'required|numeric',
            'jml_vitamin_a' => 'required|numeric',
            'jml_vitamin_b' => 'required|numeric',
            'jml_vitamin_c' => 'required|numeric'
        ]);
        $suplemen->update($request->all());
        return redirect()->route('admin')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(Suplemen $suplemen) {
        $suplemen->delete();
        return redirect()->route('admin')->with('succes', 'Data berhasil dihapus');
    }

}
