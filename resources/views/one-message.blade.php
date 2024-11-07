@extends('layouts.app')
@section('name')
    {{ $data->subject }}
@endsection

@section('content')
    <h1>{{ $data->subject }}</h1><hr>
    <div class="alert alert-secondary">
        <p>{{ $data->message }}</p>
        <p>{{ $data->email }} - {{ $data->name }}</p>
        <p><small><i>{{ $data->created_at }}</i></small></p>
        <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-success">Редактировать</button></a>
        <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-success">Удалить</button></a>
    </div><hr>
@endsection
