<?php

namespace App\Http\Controllers;
use App\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
  // restfull
    public function index()
    {
      $santris = Santri::all();

      return view('santri.index', compact('santris'));
    }

    public function create()
    {
        return view('santri.create');
    }

    public function store(Request $request)
    {
      // validasi kosong dan harus integer
      $request->validate([
        'nama' => 'required',
        'umur' => 'required|integer',
        'alamat' => 'required',
        'jenis_kelamin' => 'required'
      ]);

        // cara 1
        // memasukkan data ke database
        // dd($request->all()); diedump = dd
        // $nama = $request->nama;
        // $umur = $request->umur;
        // $alamat = $request->alamat;
        // $jenis_kelamin = $request->jenis_kelamin;

        // Santri::create([
        //     'nama' => $nama,
        //     'umur' => $umur,
        //     'alamat' => $alamat,
        //     'jenis_kelamin' => $jenis_kelamin
        // ]);

        // cara 2
        // $data['nama'] = $request->nama;
        // $data['umur'] = $request->umur;
        // $data['alamat'] = $request->alamat;
        // $data['jenis_kelamin'] = $request->jenis_kelamin;
        //
        // Santri::create($data);

        // cara 3
        Santri::create($request->all());

        return redirect()->route('santri.index');
    }

    public function show($id)
    {
      $santri = Santri::findOrFail($id);

      return view('santri.show', compact('santri'));
    }

    public function edit($id)
    {
      // snake_case camelCase

        $santri = Santri::findOrFail($id);
        return view('santri.edit', compact('santri'));
    }

    public function update(Request $request, $id)
    {
      $santri = Santri::findOrFail($id);

      $santri->nama = $request->nama;
      $santri->umur = $request->umur;
      $santri->alamat = $request->alamat;
      $santri->jenis_kelamin = $request->jenis_kelamin;
      $santri->save();

      return redirect()->route('santri.index');
    }

    public function destroy($id)
    {
      $santri = Santri::findOrFail($id);
      $santri->delete();

      return redirect()->route('santri.index');
    }
}
