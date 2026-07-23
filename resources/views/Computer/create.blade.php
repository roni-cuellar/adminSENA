@extends('layouts.app')

@section('title', 'Computadores')

@section('content')
    <h1>Computadores</h1>
    <form action="{{route('computer.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Número:
            <br>
            <input type="number" name="number" value="{{ old('number') }}">
        </label>
        <br>

        <label>
            Marca:
            <br>
            <input type="text" name="brand" value="{{ old('brand') }}">
        </label>
        <br>
        <br>

        <button type="submit">Llenar el siguiente formulario</button>
    </form>
@endsection
