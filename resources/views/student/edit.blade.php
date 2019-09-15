@extends('template')

@section('main')
    <div class="container" id="siswa">
        <div class="float-right"><a href="{{ URL::to('student') }}" class="btn btn-primary">Kembali</a></div>
        <h2 class="my-4">Ubah Data Siswa</h2>

        {{-- FORM WITH HTMLCOLLECTION --}}
        {!! Form::model($siswa, ['method' => 'PATCH', 'action' => ['StudentController@update', $siswa->id]]) !!}
        <div class="form-group">
            {!! Form::hidden('id', $siswa->id) !!}
            {!! Form::label('nisn','NISN') !!}
            {!! Form::number('nisn', null, ['class' => 'form-control', 'id' => 'nisn']) !!}
            <span class="text-danger">{{ $errors->first('nisn') }}</span>
        </div>
        <div class="form-group">
            {!! Form::label('nama_siswa','Nama Siswa') !!}
            {!! Form::text('nama_siswa', null, ['class' => 'form-control', 'id' => 'nama_siswa']) !!}
            <span class="text-danger">{{ $errors->first('nama_siswa') }}</span>
        </div>
        <div class="form-group">
            {!! Form::label('nomor_telepon','Nomor Telepon') !!}
            {!! Form::text('nomor_telepon', null, ['class' => 'form-control', 'id' => 'nomor_telepon']) !!}
            <span class="text-danger">{{ $errors->first('nomor_telepon') }}</span>
        </div>
        <div class="form-group">
            {!! Form::label('tanggal_lahir','Tanggal Lahir') !!}
            {!! Form::date('tanggal_lahir', !empty($siswa) ? $siswa->tanggal_lahir->format('Y-m-d') : null, ['class' => 'form-control', 'id' => 'tanggal_lahir']) !!}
            <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
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
            <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
        </div>
        <div class="form-group">
            {!! Form::submit('Ubah Data', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>

@stop