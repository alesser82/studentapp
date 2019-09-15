@extends('template')

@section('main')
    <div class="container" id="siswa">
        <h2 class="my-4">Tambah Siswa</h2>
        {{-- @include('errors.form_error_list') --}}
        <form action="{{ url('student') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nisn">NISN</label>
            <input type="number" name="nisn" id="nisn" class="form-control {{ $errors->has('nisn') ? 'border-danger' : '' }}" value="{{ Request::old('nisn') }}">
        @if($errors->has('nisn'))
            <span class="text-danger">{{ $errors->first('nisn') }}</span>
        @endif
        </div>
        <div class="form-group">
            <label for="nama_siswa">Nama Siswa</label>
            <input type="text" name="nama_siswa" id="nama_siswa" class="form-control {{ $errors->has('nama_siswa') ? 'border-danger' : '' }}" value="{{ Request::old('nama_siswa') }}">
        @if($errors->has('nama_siswa'))
            <span class="text-danger">{{ $errors->first('nama_siswa') }}</span>
        @endif
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ $errors->has('tanggal_lahir') ? 'border-danger' : '' }}">
        @if($errors->has('tanggal_lahir'))
            <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
        @endif
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin :</label>
            <div class="custom-radio">
                <label for=""><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L"> Laki-laki</label>
            </div>
            <div class="custom-radio">
                <label for=""><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P"> Perempuan</label>
            </div>
        @if($errors->has('jenis_kelamin'))
            <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
        @endif
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Student</button>
        </div>
        </form>
    </div>

@stop