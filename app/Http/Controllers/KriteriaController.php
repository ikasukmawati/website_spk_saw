<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bobot;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriteria = Bobot::all();
        // foreach($kriteria as $key) {
        //     dd(gettype($key->value));
        // }
        // // dd($kriteria[0]->key);
        return view('layouts.admin.kriteria', compact('kriteria'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'key' => 'required',
            'nilai' => 'required',
            'keterangan' => 'required',
            'bobot' => 'required',
        ]);

        Bobot::create([
            'key' => $request->input('key'),
            'value' => $request->input('nilai'),
            'keterangan' => $request->input('keterangan'),
            'bobot' => $request->input('bobot'),
        ]);
        sleep(1);
        return redirect()->route('kriteria')->with(['success' => 'Data berhasil ditambahkan']);
    }

    public function edit($id)
    {
        $kriteria = Bobot::find($id);
        return view('layouts.admin.edit-kriteria', compact('kriteria'));
    }

    public function update(Request $request, $id)
    {
        $data = Bobot::find($id);
        $data->update([
            'key' => $request->input('key'),
            'value' => $request->input('nilai'),
            'keterangan' => $request->input('keterangan'),
            'bobot' => $request->input('bobot'),
        ]);
        sleep(1);
        return redirect()->route('kriteria')->with(['success' => 'Data berhasil diperbarui']);
    }

    public function destroy(Bobot $kriteria, $id)
    {
        $data = Bobot::find($id);
        $data->delete();
        $kriteria->delete();
        sleep(1);
        return redirect()->route('kriteria')->with('succes', 'Data berhasil dihapus');
    }
}
