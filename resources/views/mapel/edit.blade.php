@extends('main.layout')
@section('content')
<center>
    <br>
        <h2>UBAH DATA MAPEL</h2>
        @if (session('success'))
        <p class="text-success">{{ session('success') }}</p>
        @endif
        @if (session('error'))
        <p class="text-danger">{{ session('error') }}</p>
        @endif
        <form method="post" action="/mapel/update/{{ $mapel->id }}">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NAMA MAPEL</td>
                    <td class="bar">
                        <input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}"></td>
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