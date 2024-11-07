@extends('layouts.app')
@section('name')
    Контакты
@endsection

@section('content')
    <h1>Контакты</h1>
    <p>Мы ценим ваше желание связаться с нами, но страница "Контакты" пока недоступна. Пожалуйста, возвращайтесь позже, чтобы найти актуальные контактные данные и форму для связи.</p>



    <form action="{{ route('contact-form') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Почта</label>
            <input type="text" name="email" placeholder="Введите почту" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Введите тему" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" placeholder="Введите сообщение" id="message" class="form-control"></textarea>
        </div><br>

        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection
