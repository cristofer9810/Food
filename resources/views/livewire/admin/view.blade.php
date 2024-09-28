<div>
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de la imagen">
    </div>

@if ($views->count())

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Actualizar</th>
                    <th>Borrar</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($views as $view)
                    <tr>
                        <td class="">{{ $view->id }}</td>
                        <td class="">{{ $view->name }}</td>
                        <td class="">
                            <div class="image-wrapper flex">
                                @if ($view->gallery)
                                    <img id="picture" src="{{ Storage::url($view->gallery->url) }}" width="150px" height="150px">
                                @else
                                    <img id="picture" width="150px" height="150px"
                                        src="https://cdn.pixabay.com/photo/2022/02/11/21/41/cheese-7008088_960_720.jpg">
                                @endif

                            </div>
                        </td>
                        <td>
                          @can('admin.views.edit')

                                <a class="btn btn-success btn-sm text-center " href="{{ route('admin.views.edit', $view) }}"><i
                                        class="fas fa-pencil-alt"></i></a>

                          @endcan
                        </td>
                        <td>

                            @can('admin.views.destroy')


                                <div class="form-group text-center">
                                    {!! Form::open(['route' => ['admin.views.destroy', $view], 'method' => 'delete', 'class' => 'formulario-eliminar']) !!} {{-- , 'onsubmit' => 'return confirm("Esta seguro de borrar la imagen?")' --}}
                                    {!! Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger']) !!}
                                    {!! Form::close() !!}
                                </div>

                            @endcan

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{ $views->links() }}
    </div>

    @else
        <div class="card-body">
            <strong>No hay ningún registro</strong>
        </div>
    @endif
</div>
