
@extends('layouts.app')
@section('content')
    <h1>Aprendiz Registrado</h1>
    <div>
        <p><strong>ID:</strong> {{ $apprentice->id }}</p>
        <p><strong>Nombre:</strong> {{ $apprentice->name }}</p>
        <p><strong>Correo:</strong> {{ $apprentice->email }}</p>
        <p><strong>Teléfono:</strong> {{ $apprentice->cell_number }}</p>
        <p><strong>Curso ID:</strong> {{ $apprentice->course_id }}</p>
        <p><strong>Computador ID:</strong> {{ $apprentice->computer_id }}</p>
        <p><strong>Creado:</strong> {{ $apprentice->created_at }}</p>
    </div>
    
    <a href="{{ route('apprentice.create') }}" class="btn-link-sena"><i class="bi bi-arrow-right-circle"></i>Volver al formulario </a>

@endsection