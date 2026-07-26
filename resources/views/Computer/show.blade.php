
@extends('layouts.app')
@section('content')
    <h1>Computador Registrado</h1>

    <div class ="container">
        <p><strong>ID:</strong> {{ $computer->id }}</p>
        <p><strong>Número:</strong> {{ $computer->number }}</p>
        <p><strong>Marca:</strong> {{ $computer->brand }}</p>
        <p><strong>Creado:</strong> {{ $computer->created_at }}</p>
    </div>
    
    <a href="{{ route('computer.create') }}" class="btn-link-sena"><i class="bi bi-arrow-right-circle"></i> Volver al formulario </a>

@endsection