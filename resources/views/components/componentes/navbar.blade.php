<nav class="navbar">
    <div class="logo">
        <a href="{{route('welcome')}}">Amazonia</a>
    </div>
    <label class="burger" for="burger">
        <input type="checkbox" id="burger">
        <span></span>
        <span></span>
        <span></span>
    </label>

    <ul class="nav-links">
        <li class="nav-item">
            <a href="{{route('paquetes')}}">Paquetes</a>
            <ul class="dropdown">
                <li><a href="#">Africa</a></li>
                <li><a href="#">Asia</a></li>
                <li><a href="#">Australasia</a></li>
                <li><a href="#">Central Asia</a></li>
                <li><a href="#">Europe</a></li>
                <li><a href="#">Latin America</a></li>
                <li><a href="#">Middle East</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{route('reservaciones')}}">Reservaciones</a>
            <ul class="dropdown">
                <li><a href="#">Africa</a></li>
                <li><a href="#">Asia</a></li>
                <li><a href="#">Australasia</a></li>
                <li><a href="#">Central Asia</a></li>
                <li><a href="#">Europe</a></li>
                <li><a href="#">Latin America</a></li>
                <li><a href="#">Middle East</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{route('que-hacer')}}<">Que hacer</a>
        </li>
    </ul>
    <div class="contact-info">
        <button class="contact-btn">Contact Us</button>
        <div class="dropdown-input">
            <label for="currency-select" class="dropdown-label">Seleccionar moneda:</label>
            <select id="currency-select" name="currency">
                <option value="usd" selected>Dólar</option>
                <option value="eur">Euro</option>
                <option value="pen">Soles</option>
            </select>
        </div>
    </div>
</nav>
<script>
    document.getElementById('currency-select').addEventListener('change', function() {
  const selectedCurrency = this.value;
  console.log("Moneda seleccionada:", selectedCurrency);

  // Lógica adicional que quieras implementar con la moneda seleccionada
  switch (selectedCurrency) {
    case 'usd':
      console.log("Has seleccionado el Dólar");
      break;
    case 'eur':
      console.log("Has seleccionado el Euro");
      break;
    case 'pen':
      console.log("Has seleccionado Soles");
      break;
  }
});

</script>
