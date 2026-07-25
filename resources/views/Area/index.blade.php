@extends('layouts.app')

@section('content')
    <h1>LISTAR PRODUCTOS</h1>
    <div class ="container">
        <a href="{{ route('area.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nueva area</a>
                    
        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Info</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($areas as $area)
                    <tr>
                        <br>
                        <td>{{ $area->id }}</td>
                        <td>{{ $area->name }}</td>
                        <td><a href="{{ route('area.show', $area->id) }}">Mostrar</a></td> 

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>

@endsection