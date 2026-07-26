@extends('layouts.app')

@section('content')
    <h1>LISTAR PRODUCTOS</h1>

    <a href="{{ route('computer.create') }}" class="btn-link-sena"><i class="bi bi-arrow-right-circle"></i> Nuevo Producto</a>

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
                        <td><a href="{{ route('computer.show', $computer->id) }} "class="btn-ver"> <i class="bi bi-eye"></i></a>
                            <a href="{{ route('computer.show', $computer->id) }} "class="btn-editar"> <i class="bi bi-pencil"></i></a>
                            <a href="{{ route('computer.show', $computer->id) }} "class="btn-eliminar"> <i class="bi bi-trash"></i></a>
                        </td>
                        <br>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
