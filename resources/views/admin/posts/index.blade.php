@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <a class="float-right btn btn-secondary " href="{{ route('admin.posts.create') }}">Nuevo post</a>

    <h1>Listado de Post</h1>
@stop



@section('content')

    @livewire('admin.posts-index')

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        console.log('Hi!');
    </script>

@stop
