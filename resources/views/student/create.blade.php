@extends('template')

@section('main')
    <div class="container" id="siswa">
        <h2 class="my-4">Add Student</h2>
        <form action="{{ url('student') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nisn">NISN</label>
            <input type="text" name="nisn" id="nisn" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama_siswa">Nama Siswa</label>
            <input type="text" name="nama_siswa" id="nama_siswa" class="form-control">
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin :</label>
            <div class="custom-radio">
                <label for=""><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L"> Laki-laki</label>
            </div>
            <div class="custom-radio">
                <label for=""><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P"> Perempuan</label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Student</button>
        </div>
        </form>
    </div>

@stop