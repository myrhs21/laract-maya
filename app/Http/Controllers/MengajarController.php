<?php

namespace App\Http\Controllers;

use App\Models\Mengajar;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Kelas;


class MengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('mengajar.index', [
            'mengajar' => Mengajar::all(),
            'guru' => Guru::all(),
            'kelas' => Kelas::all(),
            'mapel' => Mapel::all()
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
        return view('mengajar.create', [
        'guru' => Guru::all(),
        'mapel' => Mapel::all(),
        'kelas' => Kelas::all()
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
        $data_mengajar = $request->validate([
            'guru_id' => 'required|numeric',
            'mapel_id' => 'required|numeric',
            'kelas_id' => 'required|numeric',
        ]);
        Mengajar::create($data_mengajar);
        return redirect('/mengajar/index')->with('success', 'Data Mengajar Berhasil Ditambah');

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
    public function edit(Mengajar $mengajar)
    {
        //
        return view('mengajar.edit', ['mengajar' => $mengajar, 
        'guru' => Guru::all(),
        'mapel' => Mapel::all(),
        'kelas' => Kelas::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mengajar $mengajar)
    {
        //
        $data_mengajar = $request->validate([
            'guru_id' => 'required|numeric',
            'mapel_id' => 'required|numeric',
            'kelas_id' => 'required|numeric',
        ]);
        $mengajar->update($data_mengajar);
        return redirect('/mengajar/index')->with('success', 'Data mengajar Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mengajar $mengajar)
    {
        //

        $mengajar->delete();

        return redirect('/mengajar/index')->with('success', 'Data Berhasil dihapus');
    }
}
