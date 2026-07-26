@extends('layouts.app')
@section('title', 'Computadores')
@section('content')


<div class="formulario">
    <div class="header_formulario">
        <h1>Computadores</h1> 
    </div>
    
    <form action="{{route('computer.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="campo">
            <label>Número:</label>
            <input type="number" name="number" value="{{ old('number') }}" placeholder="Ej: 101, 102, etc..">
        </div>

        <div class="campo">
            <label>Marca:</label>
            <input type="text" name="brand" value="{{ old('brand') }}" placeholder="Ej: Lenovo, hp, etc...">
        </div>    
            
        <div class="botones_formularios">
            <button type="submit" class="btn-sena">Guardar</button>
            <a href="{{ route('computer.index') }}" class="btn-link-sena"><i class="bi bi-arrow-right-circle"></i> Ver computadores</a>
        </div>
    
    </form>

</div>

@endsection

