@extends('layouts.app')

@section('title', 'Computadores')

@section('content')
    <h1>Computadores</h1>
    <form action="{{route('computer.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Número:
            <br>
            <input type="number" name="number">
        </label>
        <br>

        <label>
            Marca:
            <br>
            <input type="text" name="brand">
        </label>
        <br>

        <button type="submit">Llenar el siguiente formulario:</button>
    </form>
@endsection