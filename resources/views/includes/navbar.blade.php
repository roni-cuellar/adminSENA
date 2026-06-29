<nav style="background:#2563eb; padding:1rem 0;">
  <div style="max-width:1200px; margin:0 auto; display:flex; flex-wrap:wrap; align-items:center; gap:0.75rem;">
    <a href="{{ url('/') }}" style="color:white; font-weight:700; text-decoration:none; margin-right:1.5rem;">Admin-Sena</a>
    <a href="{{ route('computer.create') }}" style="color:white; text-decoration:none;">Computadores</a>
    <a href="{{ route('training_center.create') }}" style="color:white; text-decoration:none;">Centro</a>
    <a href="{{ route('area.create') }}" style="color:white; text-decoration:none;">Áreas</a>
    <a href="{{ route('course.create') }}" style="color:white; text-decoration:none;">Cursos</a>
    <a href="{{ route('apprentice.create') }}" style="color:white; text-decoration:none;">Aprendices</a>
    <a href="{{ route('teacher.create') }}" style="color:white; text-decoration:none;">Instructores</a>
  </div>
</nav>