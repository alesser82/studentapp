@extends('template')

@section('main')
    <div id="siswa" class="container my-2">
        <h2>Detail siswa</h2>

        <table class="table table-striped my-3">
            <tr>
                <th>NISN</th>
                <td>{{ $siswa->nisn }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $siswa->nama_siswa }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $siswa->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $siswa->jenis_kelamin }}</td>
            </tr>
        </table>
    </div>
@stop

@section('footer')
    @include('footer_fixed')
@stop