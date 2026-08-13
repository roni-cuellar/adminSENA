@extends('layouts.app')
@section('title', 'Cursos')
@section('content')


<div class="formulario">

    <div class="header_formulario">
        <h1>Cursos</h1>
    </div>

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

        <div class="campo">
            <label>Número de curso:</label>
            <input type="number" name="course_number" value="{{ old('course_number') }}">
        </div>

        <div class="campo">
            <label>Día:</label>
            <input type="date" name="day" value="{{ old('day') }}">
        </div>
        
        <label for="area_id">Área:</label>
        <select name="area_id" id="area_id" class="form-control">
                <option value="">Seleccione un área</option>
                
                @foreach($areas as $area)

                <option value="{{ $area->id }}" {{ old('area_id') == $area->id ? 'selected' : '' }}>
                    {{ $area->name }}
                </option>

                @endforeach
            </select>

        <label for="training_center_id">Centro de Formación:</label>
        
        <select name="training_center_id" id="training_center_id" class="form-control">
                <option value="">Seleccione un centro de formación</option>
                
                @foreach($training_centers as $training_center)

                <option value="{{ $training_center->id }}" {{ old('training_center_id') == $training_center->id ? 'selected' : '' }}>
                    {{ $training_center->name }}
                </option>

                @endforeach
            </select>

            <br>

        <div class="botones_formularios"></div>
        <button type="submit" class="btn-sena">Guardar</button>
        
    </form>
</div>
@endsection
