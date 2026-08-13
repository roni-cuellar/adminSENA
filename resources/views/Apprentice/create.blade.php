@extends('layouts.app')
@section('title', 'Aprendices')
@section('content')


<div class="formulario">
    <div class="header_formulario">
        <h1>Aprendices</h1>
    </div>

        <form action="{{ route('apprentice.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
                <div class="campo">
                    <label>Nombre:</label>
                    <input type="text" name="name" value="{{ old('name') }}">
                </div>   

                <div class="campo">
                    <label>Correo:</label>
                    <input type="email" name="email" value="{{ old('email') }}">
                </div>    

                <div class="campo">
                    <label>Número de teléfono:</label>
                    <input type="tel" name="cell_number" value="{{ old('cell_number') }}">
                </div>    

                <div class="campo">
                    <label for="course_id">Curso:</label>
                    
                    <select name="course_id" id="course_id" class="form-control">
                    <option value="">Seleccione un curso</option>
                            
                    @foreach($courses as $course)

                    <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>{{ $course->course_number }}</option>

                    @endforeach
                    </select>
                </div>

                <div class="campo">
                    <label for="computer_id">Computador:</label>
                    
                    <select name="computer_id" id="computer_id" class="form-control">
                    <option value="">Seleccione un computador</option>
                            
                    @foreach($computers as $computer)

                    <option value="{{ $computer->id }}" {{ old('computer_id') == $computer->id ? 'selected' : '' }}>{{ $computer->number }}</option>
                    @endforeach
                    </select>
                </div>
                
                <div class="botones_formularios">
                <button type="submit" class="btn-sena">Guardar</button>
                </div>


        </form>

</div>
    @endsection
