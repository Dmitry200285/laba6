@extends('layouts.app')

@section('title','Блог')

@section('content')
    <h1>Твой блог!</h1>
    @foreach($posts as $key => $post)
        <div style="display: flex;">
            <div style="flex:50%;border: 2px solid">
                {{ $key }} - <a href="/blog/{{ $post->id }}/detail">{{ $post -> title }}</a>
            </div>
        </div>
    @endforeach
@endsection
