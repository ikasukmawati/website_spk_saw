<?php

namespace App\Http\Controllers;
use App\Models\Suplemen;
use Illuminate\Http\Request;

class SuplemenController extends Controller
{
    public function store(Request $request) {
        $this->validate($request, [
            'nama' => 'required|string',
            'harga' => 'required',
            'berat' => 'required',
            'jml_vitamin_a' => 'required',
            'jml_vitamin_b' => 'required',
            'jml_vitamin_c' => 'required',
        ]);
        Suplemen::create($request->post());
        sleep(1);
        return redirect()->route('admin')->with(['success' => 'Data berhasil ditambahkan']);
    }

    public function edit($id) {
        $suplemen = Suplemen::find($id);
        return view('layouts.admin.edit', compact('suplemen'));
    }

    public function update(Request $request, $id) {
        $data = Suplemen::find($id);
        $data->update($request->all());
        sleep(1);
        return redirect()->route('admin')->with(['success' => 'Data berhasil diperbarui']);
    }

    public function destroy(Suplemen $suplemen, $id) {
       $data = Suplemen::find($id);
       $data->delete();
       $suplemen->delete();
       sleep(1);
       return redirect()->route('admin')->with('succes', 'Data berhasil dihapus');
    }

}
