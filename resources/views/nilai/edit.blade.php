@extends('main.layout')
@section('content')
<center>
    <br>
        <h2>TAMBAH DATA NILAI</h2>
        <form method="post" action="/nilai/update/{{ $nilai->id }}">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">GURU MAPEL</td>
                    <td class="bar">
                        <select name="mengajar_id" id="">
                            <option></option>
                            @foreach ($mengajar as $each)
                            <option value="{{ $each->id }}" {{ $each->id == $nilai->mengajar_id ? 'selected' : '' }}>
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
                            <option value="{{ $each->id }}" {{ $each->id == $nilai->siswa_id ? 'selected' : '' }}>
                            {{ $each->nama_siswa }}
                            </option>
                            @endforeach
                        </select>
                </tr>
                <tr>
                    <td class="bar">ULANGAN HARIAN</td>
                    <td class="bar">
                        <input type="text" name="uh" value="{{ $nilai->uh }}"></td>
                </tr>
                <tr>
                    <td class="bar">ULAGAN TENGAH SEMESTER</td>
                    <td class="bar">
                        <input type="text" name="uts" value="{{ $nilai->uts }}"></td>
                </tr>
                <tr>
                    <td class="bar">ULANGAN AKHIR SEMESTER</td>
                    <td class="bar">
                        <input type="text" name="uas" value="{{ $nilai->uas }}"></td>
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