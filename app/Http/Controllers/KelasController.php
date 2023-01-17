<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Jurusan;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kelas.index', [
            'kelas' => Kelas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kelas.create', [
            'kelas' => Kelas::all(),
            'jurusan' => Jurusan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data_kelas = $request->validate([
            'nama_kelas' => 'required',
            'jurusan_id' => 'required',
        ]);
        Kelas::create($data_kelas);
        return redirect('/kelas/index')->with('success', 'Data Kelas Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        //
        return view('kelas.edit', ['kelas' => $kelas 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Kelas $kelas)
    {
        //
        $data_kelas = $request->validate([
            'nama_kelas' => 'required',
            'jurusan_id' => 'required'
        ]);
        $kelas->update($data_kelas);
        return redirect('/kelas/index')->with('success', 'Data kelas Berhasil Ditambah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        //
        $jurusan = Jurusan::where('kelas_id', $kelas->id)->first();

        if($jurusan) {
            return back()->with('error', "$kelas->nama_kelas masih digunakan di menu mengajar");
        }


        $jurusan = Jurusan::where('kelas_id', $kelas->id)->first();

        if($jurusan) {
            return back()->with('error', "$kelas->jurusan_id masih digunakan di menu mengajar");
        }


        $kelas->delete();

        return redirect('/kelas/index')->with('success', 'Data Berhasil dihapus');
    }
}
