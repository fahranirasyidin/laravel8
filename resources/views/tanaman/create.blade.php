@extends('layouts.app')
@section('content')

<div class="content">
    <div class="card">
        <div class="card-body">
{!! Form::open(['route' => 'tanaman.store']) !!}
    <div class="body m-10">
        <div class="form-group">
            {!! Form::label('id', 'ID'); !!}
            {!! Form::text('id', '',['class' => 'form-control','placeholder'=>'id']); !!}
        </div>
        <div class="form-group">
        {!! Form::label('nama', 'Nama'); !!}
            {!! Form::textarea('nama', '',['class' => 'form-control','placeholder'=>'nama']); !!}
        </div>
        <button class="btn btn-success">SIMPAN</button>
        <a href="{!! route('tanaman.index') !!}" class="btn btn-danger">CANCEL</a>
    </div>
        {!! Form::close() !!}
    </div>
    </div>
    </div>
@endsection