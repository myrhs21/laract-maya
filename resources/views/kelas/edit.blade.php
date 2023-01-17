@extends('main.layout')
@section('content')
<center>
    <br>
        <h2>UBAH DATA KELAS</h2>
        <form method="post" action="/kelas/store">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NAMA KELAS</td>
                    <td class="bar">
                        <input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}"></td>
                </tr>
                <tr>
                    <td class="bar">NAMA JURUSAN</td>
                    <td class="bar">
                        <select name="kelas_id" id="">
                            <option value=""></option>
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
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