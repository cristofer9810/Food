@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('admin.categories.create')
    <a class="float-right btn btn-secondary btn-sm" data-toggle="modal" data-target="#ModalCreate" href="#">Agregar
        categoría</a>
    @endcan
    <h1>Lista de categorías</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="">Id</th>
                        <th class="">Nombre</th>
                        <th class="" colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="">{{ $category->id }}</td>
                            <td class="">{{ $category->name }}</td>
                            <td width="10px">
                                @can('admin.categories.edit')
                                <a class="btn btn-success" data-toggle="modal" data-target="#ModalEdit{{ $category->id }}"
                                    href="#"><i class="fas fa-pencil-alt"></i></a>
                                @endcan
                            </td>
                            <td width="10px">

                                @can('admin.categories.destroy')

                                <a data-toggle="modal" data-target="#ModalDelete{{ $category->id }}" class="btn btn-danger"
                                    href=""><i class="fas fa-trash-alt"></i></a>


                                @endcan

                            </td>
                            @include('admin.categories.modal.edit')
                            @include('admin.categories.modal.delete')
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>

        @include('admin.categories.modal.create')


    @stop

    @section('js')


        <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

        <script>
            $(document).ready(function() {
                $("#name").stringToSlug({
                    setEvents: 'keyup keydown blur',
                    getPut: '#slug',
                    space: '-'
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                $("#title").stringToSlug({
                    setEvents: 'keyup keydown blur',
                    getPut: '#glu',
                    space: '-'
                });
            });
        </script>
    @endsection
