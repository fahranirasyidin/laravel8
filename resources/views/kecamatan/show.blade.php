@extends('layouts.app')
@section('content')

<div class="content">
    <div class="card">
        <div class="card-body">

        <div class="body m-10">
            <div class="form-group">
            {!! Form::label('id', 'ID'); !!}
            {!! Form::label('id', $kecamatan->judul, ['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
            {!! Form::label('nama', 'Nama'); !!}
            {!! Form::label('nama', $kecamatan->isi, ['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
            {!! Form::label('created_at', 'Waktu Tambah'); !!}
            {!! Form::label('created_at', $kecamatan->created_at,['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
            {!! Form::label('updated_at', 'Waktu Ubah'); !!}
            {!! Form::label('updated_at', $kecamatan->updated_at,['class' => 'form-control']); !!}
            </div>

            <a href="{!! route('kecamatan.index') !!}" class="btn btn-warning">Kembali</a>
        </div>
        </div>
    </div>
</div>
@endsection