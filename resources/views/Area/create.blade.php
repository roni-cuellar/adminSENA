@extends('layouts.app')

@section('title', 'Área')

@section('content')
    <h1>Área</h1>
    <form action="{{route('area.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        <br>
        <br>

        <button type="submit" class="btn btn-success">Llenar el siguiente formulario</button>
        <a href="{{ route('area.index') }}" class="btn btn-success"> Ver areas </a>
    </form>
@endsection
