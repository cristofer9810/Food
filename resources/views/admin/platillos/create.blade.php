@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear platillo</h1>
@stop

@section('content')

<div class="container card">

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card-body">
        {!! Form::open(['route' => 'admin.platillos.store', 'autocomplete' => 'off', 'files' => true]) !!}

        {{-- corrigue el error de user_id --}}
       {{--  {!! Form::hidden('user_id', auth()->user()->id) !!} --}}


        @include('admin.platillos.partials.form')


        {!! Form::submit('crear platillo', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>


@stop

@section('css')
<style>
    .image-wrapper {
        position: relative;
        padding-bottom: 56.25%;
    }

    .image-wrapper img {
        position: absolute;
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

</style>
@stop

@section('js')
<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>

<script>
    $(document).ready(function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });

    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });


    //cambiar imagen
    document.getElementById("file").addEventListener('change', cambiarImagen);

    function cambiarImagen(event) {
        var file = event.target.files[0];

        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };

        reader.readAsDataURL(file);
    }
</script>
@stop
