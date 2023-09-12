<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')

    <style>
        .banner-container{
            height: auto;
        }
    </style>

    <title>@yield('title')</title>
</head>
<body>

    <main>
        <div class="banner-container">
            <div class="capa"></div>
            <div class="banner-info">
                <nav class="nav-home">
                    <div class="container-session">
                        @auth
                            <div>
                                <p>Hola! {{auth()->user()->name}}</p>
                            </div>
                        @endauth
                
                        @guest
                            <a href="/login">Iniciar sesion</a>
                        @endguest
                    </div>

                    <div class="nav-container">
                        <h2>Logo Tarot</h2>
                        <div id="menu">
                            <ul>
                                <li><a href="/">Inicio</a></li>
                                <li><a href="/quienes-somos">| Quienes Somos</a></li>
                                <li>
                                    <a>| Servicios</a>
                                    <ul>
                                        <li><a href="/tarotistas">Tarotistas</a></li>
                                        <li><a href="/astrologos">Astrologos</a></li>
                                        <li><a href="/numerologos">Numerologos</a></li>
                                        <li><a href="/signos-zodiacales">Signos zodiacales</a></li>
                                    </ul>
                                </li>
                                <li><a href="/contacto">| Contacto</a></li>
                                <li><a href="/tarot-online">| Tarot Online</a></li>
                                <li><a href="/planes">| Planes</a></li>
                                <li>
                                    <a>| Videntes</a>
                                    <ul>
                                        <li><a href="#">Enlace 2.1</a></li>
                                        <li><a href="#">Enlace 2.2</a></li>
                                        <li><a href="#">Enlace 2.3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        @yield('content')
 
    </main>
    
 
        
    <footer>
        <div class="footer-container1">
            <h3>Empieza con nuestros planes</h3>
            <button>Ver planes</button>
        </div>
        <div class="footer-container2">
            <div>
                <h4>Sobre nosotros</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, velit?</p>
            </div>
            <div>
                <h4>Nuestros Servicios</h4>
                <ul>
                    <li>Consejos de vida personal</li>
                    <li>Forcecast por mes</li>
                    <li>Carta Natal</li>
                    <li>Forcecast por año</li>
                </ul>
            </div>
            <div>
                <h4>Apoyo</h4>
                <ul>
                    <li>Consejos de vida personal</li>
                    <li>Forcecast por mes</li>
                    <li>Carta Natal</li>
                    <li>Forcecast por año</li>
                </ul>
            </div>
        </div>
        <div class="footer-container3">
            <hr>
            <p>Copyright @ 2023 Todos los derechos reservados</p>
        </div>
    </footer>
</body>
</html>