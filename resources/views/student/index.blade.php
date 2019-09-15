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
            @foreach($siswa_list_page as $siswa)
                <tr>
                    <td>{{ $siswa->nisn }}</td>
                    <td>{{ $siswa->nama_siswa }}</td>
                    <td>{{ $siswa->tanggal_lahir }}</td>
                    <td>{{ $siswa->jenis_kelamin }}</td>
                    <td>
                        <div class="box-button d-inline-block">
                            <a href="{{ URL::to('student/'.$siswa->id) }}" class="btn btn-success btn-sm">Detail</a>
                        </div>
                        <div class="box-button d-inline-block">
                            <a href="{{ URL::to('student/'.$siswa->id.'/edit') }}" class="btn btn-warning btn-sm">Ubah</a>
                        </div>
                        <div class="box-button d-inline-block">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['StudentController@destroy', $siswa->id]]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-6">
                <strong>Jumlah siswa : {{ $jumlah_siswa }}</strong>
            </div>
            <div class="col-6 d-flex justify-content-end">
                {{ $siswa_list_page->links() }}
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
    @if($jumlah_siswa_halaman > 6)
        @section('footer')
            @include('footer')
        @stop
    @else
        @section('footer')
            @include('footer_fixed')
        @stop
    @endif
@else
    @section('footer')
        @include('footer_fixed')
    @stop
@endif