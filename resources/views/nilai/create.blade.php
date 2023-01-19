@extends('main.layout')
@section('content')
<center>
    <br>
        <h2>TAMBAH DATA NILAI</h2>
        <form method="post" action="/nilai/store">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">GURU MAPEL</td>
                    <td class="bar">
                        <select name="mengajar_id" id="">
                            <option></option>
                            @foreach ($mengajar as $each)
                            <option value="{{ $each->id }}">
                            {{ $each->mapel->nama_mapel }}
                            </option>
                            @endforeach
                        </select>
                </tr>
                <tr>
                    <td class="bar">SISWA</td>
                    <td class="bar">
                        <select name="siswa_id" id="">
                            <option></option>
                            @foreach ($siswa as $each)
                            <option value="{{ $each->id }}">
                            {{ $each->nama_siswa }}
                            </option>
                            @endforeach
                        </select>
                </tr>
                <tr>
                    <td class="bar">ULANGAN HARIAN</td>
                    <td class="bar">
                        <input type="number" name="uh"></td>
                </tr>
                <tr>
                    <td class="bar">ULANGAN TENGAH SEMESTER</td>
                    <td class="bar">
                        <input type="number" name="uts"></td>
                </tr>
                <tr>
                    <td class="bar">ULANGAN AKHIR SEMESTER</td>
                    <td class="bar">
                        <input type="number" name="uas"></td>
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