<nav class="navbar navbar-expand-lg navbar-dark navbar-sena">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}"> <img src="{{ asset('images/sena.png') }}" alt="Logo SENA" class="logo-sena" width="85" height="60"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarText" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarText">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('computer.create') }}">Computadores</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('training_center.create') }}">Centro</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('area.create') }}">Áreas</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('course.create') }}">Cursos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('apprentice.create') }}">Aprendices</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('teacher.create') }}">Instructores</a>
                </li>

            </ul>

        </div>
    </div>
</nav>