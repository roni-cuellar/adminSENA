@extends('layouts.app')
@section('title','Inicio')
@section('content')

<div class="hero">

    <h1>Bienvenido a Admin SENA</h1>

    <p>
        Sistema para la administración de centros de formación,
        cursos, instructores, aprendices y equipos.
    </p>

</div>

<div class="row mt-5 g-4">

    <div class="col-md-4">

        <div class="card-dashboard">

            <i class="bi bi-pc-display"></i>

            <h3>Computadores</h3>

            <p>Gestiona los equipos registrados.</p>

            <a href="{{ route('computer.index') }}" class="btn-sena">
                Entrar
            </a>

        </div>

    </div>


    <div class="col-md-4">

        <div class="card-dashboard">

            <i class="bi bi-book"></i>

            <h3>Areas</h3>

            <p>Gestiona las areas registradas.</p>

            <a href="{{ route('area.index') }}" class="btn-sena">
                Entrar
            </a>

        </div>

    </div>


    <div class="col-md-4">

        <div class="card-dashboard">

            <i class="bi bi-buildings"></i>

            <h3>Centro de formacion</h3>

            <p>Gestiona los centros registrados.</p>

            <a href="{{ route('training_center.index') }}" class="btn-sena">
                Entrar
            </a>

        </div>

    </div>

</div>

<div class="row mt-5 g-4">

        <div class="col-md-4">

            <div class="card-dashboard">

                <i class="bi bi-journal-bookmark-fill"></i>

                <h3>Cursos</h3>

                <p>Gestiona los cursos registrados.</p>

                <a href="{{ route('area.index') }}" class="btn-sena">
                    Entrar
                </a>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card-dashboard">

                <i class="bi bi-person"></i>

                <h3>Aprendices</h3>

                <p>Gestiona los aprendices registrados.</p>

                <a href="{{ route('apprentice.index') }}" class="btn-sena">
                    Entrar
                </a>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card-dashboard">

                <i class="bi bi-person-lines-fill"></i>

                <h3>Instructores</h3>

                <p>Gestiona los instructores registrados.</p>

                <a href="{{ route('computer.index') }}" class="btn-sena">
                    Entrar
                </a>

            </div>

        </div>

</div>

{{-- Misión y Visión --}}
<div class="row mt-5 g-4">

    <div class="col-md-6">
        <div class="info-dashboard">
            <i class="bi bi-bullseye"></i>

            <h2>Misión</h2>

            <p>
                Administrar de manera eficiente la información de los
                centros de formación, áreas, cursos, aprendices,
                instructores y equipos, facilitando la gestión
                académica y administrativa del SENA.
            </p>
        </div>
    </div>

    <div class="col-md-6">
        <div class="info-dashboard">
            <i class="bi bi-eye"></i>

            <h2>Visión</h2>

            <p>
                Ser una plataforma organizada, eficiente y fácil de usar
                que permita mejorar los procesos de administración y
                gestión de la información institucional.
            </p>
        </div>
    </div>

</div>


{{-- Contacto --}}
<div class="contacto-dashboard mt-5">

    <h2>
        <i class="bi bi-headset"></i>
        Contacto
    </h2>

    <p>
        Puedes comunicarte con nosotros a través de los siguientes medios.
    </p>

    <div class="contacto-items">

        <div>
            <i class="bi bi-envelope-fill"></i>
            <strong>Correo</strong>
            <span>rfcg10082156366@sena.edu.co</span>
        </div>

        <div>
            <i class="bi bi-telephone-fill"></i>
            <strong>Teléfono</strong>
            <span>+57 313 827 9034</span>
        </div>

        <div>
            <i class="bi bi-geo-alt-fill"></i>
            <strong>Ubicación</strong>
            <span>Centro de Formación SENA</span>
        </div>

    </div>

</div>

@endsection