<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paquetes</title>
    @vite('resources/css/predeterminados/navbar.css')
    @vite('resources/css/predeterminados/pie-pagina.css')
</head>
<body>
    @include('components.componentes.navbar')
    <div class="portada">
    <img src="{{ asset('img/home/portada1.jpg') }}" alt="Descripción de la imagen">
    <h1 class="texto">
    <span class="arriba">Es momento de</span>
    <span class="abajo">VIAJAR A LA AMAZONAS</span>
    </h1>
    <button src="{{asset('pages/paquetes')}}" class="btn">Ver mas tours</button>
    </div>
  <div></div>
    @include('components.componentes.pie-pagina')
</body>
</html>
