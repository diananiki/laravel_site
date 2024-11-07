@extends('layouts.app')
@section('name')
    Обновление записи
@endsection

@section('content')
    <h1>Обновление записи</h1>
    <p>Мы ценим ваше желание связаться с нами, но страница "Контакты" пока недоступна. Пожалуйста, возвращайтесь позже, чтобы найти актуальные контактные данные и форму для связи.</p>



    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" name="name" value="{{ $data->name }}" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Почта</label>
            <input type="text" name="email" value="{{ $data->email }}" placeholder="Введите почту" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Введите тему" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" placeholder="Введите сообщение" id="message" class="form-control">{{ $data->message }}</textarea>
        </div><br>

        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
@endsection
