@extends('main.layout')
@section('content')
<center>
    <br>
        <h2>TAMBAH DATA SISWA</h2>
        @if (session('success'))
        <p class="text-success">{{ session('success') }}</p>
        @endif
        @if (session('error'))
        <p class="text-danger">{{ session('error') }}</p>
        @endif
        <form method="post" action="/siswa/update/{{ $siswa->id }}">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NIS</td>
                    <td class="bar">
                        <input type="text" name="nis" value="{{ $siswa->nis }}"></td>
                </tr>
                <tr>
                    <td class="bar">Nama Siswa</td>
                    <td class="bar">
                        <input type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">Jenis Kelamin</td>
                    <td class="bar">
                        <input type="radio" name="jk" value="L" {{ $siswa->jk == 'L' ? 'checked' : '' }}>Laki laki
                        <input type="radio" name="jk" value="P" {{ $siswa->jk == 'P' ? 'checked' : ''}}>Perempuan
                    </td>
                </tr>
                <tr>
                    <td width="25%">Alamat</td>
                    <td width="25%"><textarea name="alamat" cols="30" rows="5">{{ $siswa->alamat }}</textarea></td>
                </tr>
                <tr>
                    <td class="bar">NAMA KELAS</td>
                    <td class="bar">
                    <select name="kelas_id" id="">
                        <option value=""></option>
                        @foreach ($kelas as $s)
                            <option value="{{ $s->id }}"
                        @if ($s->id == $siswa->kelas_id )
                                selected
                        @endif>{{ $s->nama_kelas }}</option>
                        @endforeach
                    </select>
                </tr>
                <tr>
                    <td width="25%">PASSWORD</td>
                    <td width="25%"><input type="password" name="password" value="{{ $siswa->password }}"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button class="button-primary" type="submit"> UBAH </button></center>
                    </td>
                </tr>
            </table>
            </form>
</center>

@endsection