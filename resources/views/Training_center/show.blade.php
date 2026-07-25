    @extends('layouts.app')
    @section('content')
<a href="{{ route('training_center.index') }}" class="btn btn-success">atras</a>
    <h1>Centro de Formacion Registrado</h1>

    <div class ="container">
        <p><strong>ID:</strong> {{ $training_center->id }}</p>
        <p><strong>Nombre:</strong> {{ $training_center->name }}</p>
        <p><strong>Ubicacion:</strong> {{ $training_center->location }}</p>
        <p><strong>Creado:</strong> {{ $training_center->created_at }}</p>
    </div>
    <a href="{{ route('training_center.create') }}" class="btn btn-success">Volver al formulario</a>
</body>
</html>

@endsection