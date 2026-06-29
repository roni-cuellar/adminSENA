@extends('layouts.app')

@section('title', 'Centro de Formación')

@section('content')
    <h1>Centro de Formación</h1>
    <form action="{{route('training_center.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>

        <label>
            Ubicación:
            <br>
            <input type="text" name="location">
        </label>
        <br>

        <button type="submit">Llenar el siguiente formulario:</button>
    </form>
@endsection