@extends('layouts.app')
@section('name')
    Сообщения
@endsection

@section('content')
    <h1>Сообщения</h1><hr>
    @foreach($data as $el)
         <div class="alert alert-secondary">
             <h3>{{ $el->subject }}</h3>
             <p>{{ $el->email }}</p>
             <p><small><i>{{ $el->created_at }}</i></small></p>
             <a href="{{ route('contact-one-data', $el->id) }}"><button class="btn btn-success">Открыть сообщение</button></a>
         </div>
    @endforeach
@endsection
