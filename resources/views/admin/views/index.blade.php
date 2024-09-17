@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <a class="float-right btn btn-secondary " href="{{ route('admin.views.create') }}">Nueva Imagen</a>

    <h1>Listado de Imagenes</h1>
@stop



@section('content')

@livewire('admin.view')

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
