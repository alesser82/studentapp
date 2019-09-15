@extends('template')

@section('main')
    <div class="container" id="siswa">
        <h2 class="my-4">Ubah Data Siswa</h2>

        {{-- FORM WITH HTMLCOLLECTION --}}
        {!! Form::model($siswa, ['method' => 'PATCH', 'action' => ['StudentController@update', $siswa->id]]) !!}
        <div class="form-group">
            {!! Form::label('nisn','NISN') !!}
            {!! Form::number('nisn', null, ['class' => 'form-control', 'id' => 'nisn']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('nama_siswa','Nama Siswa') !!}
            {!! Form::text('nama_siswa', null, ['class' => 'form-control', 'id' => 'nama_siswa']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tanggal_lahir','Tanggal Lahir') !!}
            {!! Form::date('tanggal_lahir', !empty($siswa) ? $siswa->tanggal_lahir->format('Y-m-d') : null, ['class' => 'form-control', 'id' => 'tanggal_lahir']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('jenis_kelamin','Jenis Kelamin') !!}
            <div class="custom-radio">
                <label>
                    {!! Form::radio('jenis_kelamin','L',['id' => 'jenis_kelamin']) !!} Laki - laki
                </label>
            </div>
            <div class="custom-radio">
                <label>
                    {!! Form::radio('jenis_kelamin','P', ['id' => 'jenis_kelamin']) !!} Perempuan
                </label>
            </div>
        </div>
        <div class="form-group">
            {!! Form::submit('Ubah Data', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>

@stop