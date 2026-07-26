@extends('layouts.app')
@section('title', 'Área')
@section('content')


<div class="formulario">
    <div class="header_formulario">
        <h1>Área</h1>
    </div>

    <form action="{{route('area.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="campo">
            <label>Nombre:</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Area">
        </div>
        
        <div class="botones_formularios">
            <button type="submit" class="btn-sena">Guardar</button>
            <a href="{{ route('area.index') }}" class="btn-link-sena"><i class="bi bi-arrow-right-circle"></i> Ver areas</a>
        </div>

    </form>
</div>
@endsection
