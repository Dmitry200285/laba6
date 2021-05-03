@extends('layouts.app')
@section('title','Создать пост')
@section('content')
    <h2>Создание нового поста.</h2>
    <form action="" method="post">
        @csrf
        Заголовок поста:<input type="text" name="title">
        <br>
        <textarea required name="body" id="" cols="30" rows="10">
        </textarea> <br>
        <button type="submit">Создать пост</button>
    </form>
@endsection
