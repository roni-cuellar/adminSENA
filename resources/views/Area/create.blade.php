@extends('layouts.app')

@section('title', 'Área')

@section('content')
    <h1>Área</h1>
    <form action="{{route('area.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>

        <button type="submit">Llenar el siguiente formulario:</button>
    </form>
@endsection