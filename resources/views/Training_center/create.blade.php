@extends('layouts.app')

@section('title', 'Centro de Formación')

@section('content')
    <h1>Centro de Formación</h1>
    <form action="{{route('training_center.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        <br>

        <label>
            Ubicación:
            <br>
            <input type="text" name="location" value="{{ old('location') }}">
        </label>
        <br>
        <br>

        <button type="submit" class="btn btn-success">Llenar el siguiente formulario</button>
        <a href="{{ route('training_center.index') }}" class="btn btn-success"> Ver centros de formacion </a>
    </form>
@endsection
