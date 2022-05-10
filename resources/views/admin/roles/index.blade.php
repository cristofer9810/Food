@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="float-right btn btn-secondary" data-toggle="modal" data-target="#ModalCreate" href="#">Agregar rol</a>
    <h1>Lista de roles</h1>
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
                        <th class="">Role</th>
                        <th class="" colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)

                        <tr>
                            <td class="">{{ $role->id }}</td>
                            <td class="">{{ $role->name }}</td>
                            <td width="10px">
                                @can('admin.categories.edit')
                                <a class="btn btn-success" href="{{ route('admin.roles.edit', $role) }}"><i
                                    class="fas fa-pencil-alt"></i></a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.categories.destroy')
                                <a data-toggle="modal" data-target="#ModalDelete{{ $role->id }}" class="btn btn-danger"
                                    href=""><i class="fas fa-trash-alt"></i></a>
                                @endcan
                            </td>
                            @include('admin.roles.modal.delete')
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('admin.roles.modal.create')
@stop
