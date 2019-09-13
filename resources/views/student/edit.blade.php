@extends('template')

@section('main')
    <div class="container" id="siswa">
        <h2 class="my-4">Ubah Data Siswa</h2>

        {{-- FORM WITH HTMLCOLLECTION --}}
        {!! Form::model($siswa, ['method' => 'PATCH', 'action' => ['StudentController@update', $siswa->id]]) !!}
        <div class="form-group">
            {!! Form::label('nisn','NISN') !!}
            {!! Form::text('nisn', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('nama_siswa','Nama Siswa') !!}
            {!! Form::text('nama_siswa', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tanggal_lahir','Tanggal Lahir') !!}
            {!! Form::text('tanggal_lahir', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('jenis_kelamin','Jenis Kelamin') !!}
            <div class="custom-radio">
                <label>
                    {!! Form::radio('jenis_kelamin','L') !!} Laki - laki
                </label>
            </div>
            <div class="custom-radio">
                <label>
                    {!! Form::radio('jenis_kelamin','P') !!} Perempuan
                </label>
            </div>
        </div>
        <div class="form-group">
            {!! Form::submit('Ubah Data', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>

@stop