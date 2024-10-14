<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME</title>
  @vite('resources/css/predeterminados/navbar.css')
  @vite('resources/css/welcome/diseños.css')
</head>
<body>
@include('components.componentes.navbar')
<div>
  <div class="portada">
    <img src="{{ asset('img/home/portada1.jpg') }}" alt="Descripción de la imagen">
    <h1 class="texto">Bienvenidos a la amazonia peruana</h1>
    <p class="texto">descubra con nosotros todas la maravillas de la amazonia peruana</p>
    <button src="{{asset('pages/paquetes')}}">Ver mas</button>
  </div>
  <div>

  </div>
</div>
</body>
</html>