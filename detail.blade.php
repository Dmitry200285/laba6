@extends('layouts.app')
@section('title','Detail')
@section('content')
    <div >
        <h3>{{ $post -> title }}</h3>
        <br>
        <div>{{ $post -> body }}</div>
    </div>
    <br>
    <br>
    <div>
        Категории:
    </div>
    @foreach($categories as $category)
        <a href="/blog/category/{{ $category->id }}">
            {{ $category -> name }}
        </a>
    @endforeach

    <div>
        Пользователь:
        <div>
            <a href="/blog/user/{{ $user->id }}">
                {{ $user->name }}
            </a>
        </div>
        <div>
            Дата регистрации:
            {{ $user->created_at }}
        </div>
    </div>
@endsection
