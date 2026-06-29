@extends('layouts.app')

@section('title', 'Cursos')

@section('content')
    <h1>Cursos</h1>

    @if ($errors->any())
        <div style="background:#fee2e2; color:#991b1b; padding:1rem; border:1px solid #fca5a5; margin-bottom:1rem;">
            <strong>Por favor corrige los siguientes errores:</strong>
            <ul style="margin:0.5rem 0 0 1rem; padding:0;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Número de curso:
            <br>
            <input type="text" name="course_number" value="{{ old('course_number') }}">
        </label>
        <br>

        <label>
            Día:
            <br>
            <input type="text" name="day" value="{{ old('day') }}">
        </label>
        <br>

        <label for="area_id">Área:</label>
        
         <select name="area_id" id="area_id" class="form-control">
                <option value="">Seleccione un área</option>
                
                @foreach($areas as $area)

                <option value="{{ $area->id }}" {{ old('area_id') == $area->id ? 'selected' : '' }}>
                    {{ $area->name }}
                </option>

                @endforeach
            </select>
        <br>

         <label for="training_center_id">Centro de Formación:</label>
        
         <select name="training_center_id" id="training_center_id" class="form-control">
                <option value="">Seleccione un centro de formación</option>
                
                @foreach($training_centers as $training_center)

                <option value="{{ $training_center->id }}" {{ old('training_center_id') == $training_center->id ? 'selected' : '' }}>
                    {{ $training_center->name }}
                </option>

                @endforeach
            </select>

        <button type="submit">Llenar el siguiente formulario:</button>
    </form>
@endsection