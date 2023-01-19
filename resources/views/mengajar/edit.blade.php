@extends('main.layout')
@section('content')
<center>
    <br>
        <h2>TAMBAH DATA MENGAJAR</h2>
        @if (session('success'))
        <p class="text-success">{{ session('success') }}</p>
        @endif
        @if (session('error'))
        <p class="text-danger">{{ session('error') }}</p>
        @endif
        <form method="post" action="/mengajar/update/{{ $mengajar->id }}">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NAMA GURU</td>
                    <td class="bar">
                        <select name="guru_id" id="">
                            @foreach ($guru as $g)
                                <option value="{{ $g->id }}" {{ $g->id == $mengajar->guru_id ? 'selected' : '' }}>{{ $g->nama_guru }}</option>
                            @endforeach
                        </select>
                </tr>
                <tr>
                    <td class="bar">NAMA KELAS</td>
                    <td class="bar">
                        <select name="kelas_id" id="">
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}" {{ $k->id == $mengajar->kelas_id ? 'selected' : '' }}>{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                </tr>
                <tr>
                    <td class="bar">NAMA MATA PELAJARAN</td>
                    <td class="bar">
                        <select name="mapel_id" id="">
                            @foreach ($mapel as $m)
                                <option value="{{ $m->id }}" {{ $m->id == $mengajar->mapel_id ? 'selected' : '' }}>{{ $m->nama_mapel }}</option>
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