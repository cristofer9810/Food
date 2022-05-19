<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de un post">
    </div>

    @if ($posts->count())



        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="cursor-pointer" wire:click="order('id')">ID
                                     {{-- ID --}}
                            @if ($sort == 'id')
                                @if ($direction == 'desc')
                                    <i class="float-right mt-1 fas fa-sort-alpha-down-alt"></i>
                                @else
                                    <i class="float-right mt-1 fas fa-sort-alpha-up-alt"></i>
                                @endif

                            @else
                                <i class="float-right fas fa-sort"></i>
                            @endif
                        </th>
                        <th class="cursor-pointer" wire:click="order('name')">Nombre
                            {{-- Nombre --}}
                            @if ($sort == 'name')
                                @if ($direction == 'desc')
                                    <i class="float-right mt-1 fas fa-sort-alpha-down-alt"></i>
                                @else
                                    <i class="float-right mt-1 fas fa-sort-alpha-up-alt"></i>
                                @endif

                            @else
                                <i class="float-right fas fa-sort"></i>
                            @endif
                        </th>
                        <th>Imagen</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td class="">{{ $post->id }}</td>
                            <td class="">{{ $post->name }}</td>
                            <td class="">
                                <div class="image-wrapper flex">
                                    @if ($post->image)
                                        <img id="picture" style="height: 100px; " src="{{ Storage::url($post->image->url) }}">
                                    @else
                                        <img class="object-cover object-center w-full" style="width: 100px;"
                                            src="https://cdn.pixabay.com/photo/2022/02/11/21/41/cheese-7008088_960_720.jpg" >
                                    @endif

                                </div>
                            <td width="10px">
                                {{-- aqui es el boton que edita la informacio en nuestra tabla --}}
                                <a class="btn btn-success" href="{{ route('admin.posts.edit', $post) }}"><i
                                        class="fas fa-pencil-alt"></i></a>
                            </td>
                            <td width="10px">
                                <div class="form-group text-center">
                                    {!! Form::open(['route' => ['admin.posts.destroy', $post], 'method' => 'delete', 'class' => 'formulario-eliminar', 'onsubmit' => 'return confirm("Esta seguro de borrar la imagen?")']) !!} {{-- , 'onsubmit' => 'return confirm("Esta seguro de borrar la imagen?")' --}}
                                    {!! Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger']) !!}
                                    {!! Form::close() !!}
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script>
            $('.formulario-eliminar').submit(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Estás seguro?',
                    text: "la imagen se eliminara definitivamente!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Si, eliminar!'
                    cancelButtonText: 'Cancelar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                })


            });
        </script>

        <div class="card-footer">
            {{ $posts->links() }}
        </div>
    @else
        <div class="card-body">
            <strong>No hay ningún registro</strong>
        </div>
    @endif
</div>
