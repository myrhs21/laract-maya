@extends('main.layout')
@section('content')
<center>
    <br>
        <h2>UBAH DATA KELAS</h2>
        @if (session('success'))
        <p class="text-success">{{ session('success') }}</p>
        @endif
        @if (session('error'))
        <p class="text-danger">{{ session('error') }}</p>
        @endif
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
                        <select name="jurusan_id" id="">
                            @foreach ($jurusan as $j)
                                <option value="{{ $j->id }}" {{ $j->id == $kelas->jurusan_id ? 'selected' : '' }}>{{ $j->nama_jurusan }}</option>
                            @endforeach
                        </select>
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