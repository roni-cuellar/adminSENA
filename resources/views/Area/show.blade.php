
@extends('layouts.app')
@section('content')
    <h1>Área Registrada</h1>

    <div class ="container">
        <p><strong>ID:</strong> {{ $area->id }}</p>
        <p><strong>Nombre:</strong> {{ $area->name }}</p>
        <p><strong>Creado:</strong> {{ $area->created_at }}</p>
    </div>
    
    <a href="{{ route('area.create') }}" class="btn-link-sena"><i class="bi bi-arrow-right-circle"></i>Volver al formulario </a>

@endsection