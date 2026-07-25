@extends('layouts.app')

@section('content')
    <h1>LISTAR PRODUCTOS</h1>
    <div class ="container">
        <a href="{{ route('training_center.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Producto</a>
                    
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
                        <td><a href="{{ route('training_center.show', $training_center->id) }}">Mostrar</a></td> 
                        <br>
                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>

@endsection