@extends('layouts.app')
@section('title', 'Centro de Formación')
@section('content')


<div class="formulario">
    <div class="header_formulario">
        <h1>Centro de Formación</h1>
    </div>
        <form action="{{route('training_center.store')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="campo">
                <label>Nombre:</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Centro">
            </div>

            <div class="campo">
                <label>Ubicación:</label>
                <input type="text" name="location" value="{{ old('location') }}" placeholder="Ej: Calle 3 #2-102">
            </div>

            <div class="botones_formularios">
                <button type="submit" class="btn-sena">Guardar</button>
                <a href="{{ route('training_center.index') }}" class="btn-link-sena"><i class="bi bi-arrow-right-circle"></i> Ver centros de formacion </a>
            </div>
        </form>
</div>

@endsection
