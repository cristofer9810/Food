@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ordenes</h1>
@stop

@section('content')
    <div class="card">

        <div class="card-body">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Usuario</th>
                        <th scope="col">Correo y Telefono</th>
                        <th scope="col">Tiempo y Hora</th>
                        <th scope="col">Platillo</th>
                        <th scope="col">Platillo pequeño</th>
                        <th scope="col">Platillo mediano</th>
                        <th scope="col">Platillo grande</th>
                        <th scope="col">Total($)</th>
                        <th scope="col">Mensaje</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Aceptado</th>
                        <th scope="col">Rechazado</th>
                        <th scope="col">Completado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <th scope="row">{{ $order->user->name }}</th>
                            <td>{{ $order->user->email }} <br>{{ $order->phone }}</td>
                            <td>{{ $order->date }} / {{ $order->time }}</td>
                            <td>{{ $order->saucer->name }}</td>
                            <td>{{ $order->small }}</td>
                            <td>{{ $order->medium }}</td>
                            <td>{{ $order->large }}</td>
                            <td>${{ ($order->saucer->small * $order->small) + ($order->saucer->medium * $order->medium) + ($order->saucer->large * $order->large)}}</td>
                            <td>{{ $order->body }}</td>
                            <td>{{ $order->status }}</td>
                            <form action="{{route('admin.order.status', $order->id) }}" method="post">@csrf
                                <td>
                                    <input name="status" type="submit" value="Aceptar" class="btn btn-primary btn-sm">
                                </td>
                                <td>
                                    <input name="status" type="submit" value="Rechazar" class="btn btn-danger btn-sm">
                                </td>
                                <td>
                                    <input name="status" type="submit" value="Completar" class="btn btn-success btn-sm">
                                </td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="">
@stop

@section('js')
    <script></script>
@stop
