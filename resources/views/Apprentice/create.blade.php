@extends('layouts.app')

@section('title', 'Aprendices')

@section('content')
    <h1>Aprendices</h1>
    <form action="{{ route('apprentice.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        <br>

        <label>
            Correo:
            <br>
            <input type="email" name="email" value="{{ old('email') }}">
        </label>
        <br>

         <label>
            Número de teléfono:
            <br>
            <input type="number" name="cell_number" value="{{ old('cell_number') }}">
        </label>
        <br>

        <label for="course_id">Curso:</label>
        
         <select name="course_id" id="course_id" class="form-control">
                <option value="">Seleccione un curso</option>
                
                @foreach($courses as $course)

                <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>
                    {{ $course->course_number }}
                </option>

                @endforeach
            </select>
        <br>
        
        <label for="computer_id">Computador:</label>
        
         <select name="computer_id" id="computer_id" class="form-control">
                <option value="">Seleccione un computador</option>
                
                @foreach($computers as $computer)

                <option value="{{ $computer->id }}" {{ old('computer_id') == $computer->id ? 'selected' : '' }}>
                    {{ $computer->number }}
                </option>

                @endforeach
            </select>
        <br>
        <br>
        
        <button type="submit">Llenar el siguiente formulario</button>
    </form>
@endsection
