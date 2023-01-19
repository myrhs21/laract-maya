@extends('main.layout')
@section('content')
<center>
    <br>
        <h2>TAMBAH DATA MENGAJAR</h2>
        <form method="post" action="/mengajar/store">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NAMA GURU</td>
                    <td class="bar">
                        <select name="guru_id" id="">
                            <option value=""></option>
                            @foreach ($guru as $g)
                                <option value="{{ $g->id }}">{{ $g->nama_guru }}</option>
                            @endforeach
                        </select>
                </tr>
                <tr>
                    <td class="bar">NAMA KELAS</td>
                    <td class="bar">
                        <select name="kelas_id" id="">
                            <option value=""></option>
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                </tr>
                <tr>
                    <td class="bar">NAMA MATA PELAJARAN</td>
                    <td class="bar">
                        <select name="mapel_id" id="">
                            <option value=""></option>
                            @foreach ($mapel as $m)
                                <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                            @endforeach
                        </select>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button class="button-primary" type="submit"> SIMPAN </button></center>
                    </td>
                </tr>
            </table>
            </form>
</center>

@endsection