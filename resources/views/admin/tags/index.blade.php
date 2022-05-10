@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    {{-- @can('admin.tags.create') --}}
        <a class="float-right btn btn-secondary" data-toggle="modal" data-target="#ModalCreate" href="#">Nueva etiqueta</a>
   {{--  @endcan --}}

    <h1>Mostrar listado de etiqueta</h1>
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
                        <th>Id</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>


                </thead>
                <tbody>
                    @foreach ($tags as $tag)

                        <tr>
                            <td class="">{{ $tag->id }}</td>
                            <td class="">{{ $tag->name }}</td>
                            <td width="10px">
                                {{-- aqui es el boton que edita la informacio en nuestra tabla --}}
                                {{-- @can('admin.tags.edit') --}}
                                    <a class="btn btn-success" href="{{ route('admin.tags.edit', $tag) }}"><i
                                            class="fas fa-pencil-alt"></i></a>
                               {{--  @endcan --}}
                            </td>
                            <td width="10px">
                                {{-- @can('admin.tags.destroy') --}}
                                <a data-toggle="modal" data-target="#ModalDelete{{ $tag->id }}" class="btn btn-danger"
                                    href=""><i class="fas fa-trash-alt"></i></a>
                               {{--  @endcan --}}
                            </td>
                            @include('admin.tags.modal.delete')
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('admin.tags.modal.create')
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
