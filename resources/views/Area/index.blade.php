@extends('layouts.app')

@section('content')
    <h1>LISTAR PRODUCTOS</h1>
    <div class ="container">
        <a href="{{ route('area.create') }}" class="btn-link-sena"><i class="bi bi-arrow-right-circle"></i> Nueva area</a>

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
                        <td><a href="{{ route('area.show', $area->id) }}" class="btn-ver"> <i class="bi bi-eye"></i></a>
                            <a href="{{ route('area.show', $area->id) }}" class="btn-editar"> <i class="bi bi-pencil"></i></a>
                            <a href="{{ route('area.show', $area->id) }}" class="btn-eliminar"> <i class="bi bi-trash"></i></a>
                        </td> 

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>

@endsection