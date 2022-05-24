@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de platillos</h1>
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
@stop

@section('content')



    @livewire('admin.saucers-index')
@stop

@section('css')
    <link rel="stylesheet" href="">
@stop

@section('js')
    <script></script>
@stop
