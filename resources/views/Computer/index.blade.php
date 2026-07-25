@extends('layouts.app')

@section('content')
    <h1>LISTAR PRODUCTOS</h1>

    <a href="{{ route('computer.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Producto</a>

    <div class ="container">
        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Numero</th>
                    <th>Marca</th>
                    <th>Info</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($computers as $computer)
                    <tr>
                        <br>
                        <td>{{ $computer->id }}</td>
                        <td>{{ $computer->number }}</td>
                        <td>{{ $computer->brand }}</td>
                        <td><a href="{{ route('computer.show', $computer->id) }}">Mostrar</a></td> 

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>

@endsection
