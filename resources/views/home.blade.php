@extends('layouts.app')
@section('name')
    Главная страница
@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Добро пожаловать на наш сайт! Мы работаем над созданием уникального контента, который поможет вам получить всю необходимую информацию. Пожалуйста, загляните сюда позже, чтобы увидеть обновленную версию нашей главной страницы.</p>
@endsection

@section('aside')
    @parent
    <ul class="list-group">
        <li class="list-group-item  list-group-item-secondary">🦋 посмотреть на первый сайт</li>
    </ul>
@endsection
