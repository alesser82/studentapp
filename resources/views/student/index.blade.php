@extends('template')

@section('main')
    <div class="container my-3">
    <h3>Daftar Siswa</h3>
    @if (!empty($siswa_list))
        <table class="table">
            <thead>
                <tr>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($siswa_list as $siswa)
                <tr>
                    <td>{{ $siswa->nisn }}</td>
                    <td>{{ $siswa->nama_siswa }}</td>
                    <td>{{ $siswa->tanggal_lahir }}</td>
                    <td>{{ $siswa->jenis_kelamin }}</td>
                    <td><a href="{{ URL::to('student/'.$siswa->id) }}" class="btn btn-success btn-sm">Detail</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-6">
                <strong>Jumlah siswa : {{ $jumlah_siswa }}</strong>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <span>Pagination</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{ URL::to('student/create') }}" class="btn btn-primary">Tambah siswa</a>
            </div>
        </div>
    @else
        <span>Tidak ada siswa.</span>
    @endif
    </div>
@stop

@if (!empty($siswa_list))
    @section('footer')
        @include('footer')
    @stop
@else
    @section('footer')
        @include('footer_fixed')
    @stop
@endif