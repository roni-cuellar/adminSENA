@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>APRENDICES</h1>

            <a href="{{ route('apprentice.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Nuevo estudiante
            </a>
        </div>

        <table id="idProduct" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Número celular</th>
                    <th>Curso</th>
                    <th>Computador</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($apprentices as $apprentice)
                    <tr>
                        <td>{{ $apprentice->name }}</td>
                        <td>{{ $apprentice->email }}</td>
                        <td>{{ $apprentice->cell_number }}</td>
                        <td>{{ $apprentice->course_id }}</td>
                        <td>{{ $apprentice->computer_id }}</td>

                        <td>
                            <a href="{{ route('apprentice.show', $apprentice->id) }}"
                                class="btn-ver"> <i class="bi bi-eye"></i>
                            </a>

                            <a href="{{ route('apprentice.edit', $apprentice->id) }}"
                                class="btn-editar">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <form action="{{ route('apprentice.destroy', $apprentice->id) }}"
                                    method="POST"
                                    style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn-eliminar"
                                        onclick="return confirm('¿Está seguro de eliminar este aprendiz?')">
                                        <i class="bi bi-trash"></i>
                                </button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection