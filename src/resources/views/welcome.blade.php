@extends('layout.app')

@section('title', 'Главная страница')

@section('content')

    @include('partials.header')

    @foreach ($posts as $post)

        @include('posts.partials.item', ['post' => $post])    

    @endforeach

@endsection