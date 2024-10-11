<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <title>home</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mi Proyecto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Paquetes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Reservaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <!-- Aquí puedes poner los enlaces de autenticación -->
        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" 
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
<main>
        <section class="hero">
            <h2>Descubre la magia de Machu Picchu</h2>
            <p>Explora nuestros paquetes turísticos y vive una experiencia inolvidable.</p>
            <button id="exploreButton">Explorar Paquetes</button>
        </section>

        <section class="packages">
            <h2>Paquetes Destacados</h2>
            <div class="package-card">
                <h3>Paquete A</h3>
                <p>Descripción breve del paquete A.</p>
                <button>Ver Más</button>
            </div>
            <div class="package-card">
                <h3>Paquete B</h3>
                <p>Descripción breve del paquete B.</p>
                <button>Ver Más</button>
            </div>
            <div class="package-card">
                <h3>Paquete C</h3>
                <p>Descripción breve del paquete C.</p>
                <button>Ver Más</button>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Turismo Perú. Todos los derechos reservados.</p>
    </footer>

</body>
</html>