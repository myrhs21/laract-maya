@extends('main.layout')
@section('content')
<center>
    <br>
        <h2>TAMBAH DATA SISWA</h2>
        <form method="post" action="/siswa/store">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">Nama Siswa</td>
                    <td class="bar">
                        <input type="text" name="nama_siswa"></td>
                </tr>
                <tr>
                    <td class="bar">Jenis Kelamin</td>
                    <td class="bar">
                        <input type="radio" name="jk" value="L">Laki laki
                        <input type="radio" name="jk" value="P">Perempuan
                    </td>
                </tr>
                <tr>
                    <td width="25%">Alamat</td>
                    <td width="25%"><textarea name="alamat" cols="30" rows="5"></textarea></td>
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
                    <td width="25%">PASSWORD</td>
                    <td width="25%"><input type="password" name="password"></td>
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