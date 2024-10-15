<nav class="navbar">
    <div class="logo">
        <a href="{{route('welcome')}}">Amazonia</a>
    </div>
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
        <div class="currency-switcher">
            <select>
                <option value="usd">$ USD</option>
                <option value="eur">€ EUR</option>
                <option value="gbp">£ GBP</option>
            </select>
        </div>
    </div>
</nav>