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
            <label for="student_name">Nama Siswa</label>
            <input type="text" name="student_name" id="student_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="birthday">Tanggal Lahir</label>
            <input type="date" name="birthday" id="birthday" class="form-control">
        </div>
        <div class="form-group">
            <label for="gender">Jenis Kelamin :</label>
            <div class="custom-radio">
                <label for=""><input type="radio" name="gender" id="gender"> Laki-laki</label>
            </div>
            <div class="custom-radio">
                <label for=""><input type="radio" name="gender" id="gender"> Perempuan</label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Student</button>
        </div>
        </form>
    </div>

@stop