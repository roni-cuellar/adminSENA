@extends('layouts.app')

@section('content')
    <h1>LISTAR PRODUCTOS</h1>
    <div class ="container">
        <a href="{{ route('training_center.create') }}" class="btn-link-sena"><i class="bi bi-arrow-right-circle"></i> Nuevo Producto</a>

        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ubicacion</th>
                    <th>Info</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($training_centers as $training_center)
                    <tr>
                        <br>
                        <td>{{ $training_center->id }}</td>
                        <td>{{ $training_center->name }}</td>
                        <td>{{ $training_center->location }}</td>
                        <td><a href="{{ route('training_center.show', $training_center->id) }} "class="btn-ver"> <i class="bi bi-eye"></i></a>
                            <a href="{{ route('training_center.show', $training_center->id) }} "class="btn-editar"> <i class="bi bi-pencil"></i></a>
                            <a href="{{ route('training_center.show', $training_center->id) }} "class="btn-eliminar"> <i class="bi bi-trash"></i></a>
                        </td> 
                        <br>
                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>

@endsection