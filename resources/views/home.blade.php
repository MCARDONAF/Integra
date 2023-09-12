<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Inicío</title>
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

                <div class="nav-info-container">
                    <div>
                        <h1>Confía en nuestra experiencia</h1>
                        <h4>Inicia el control de tu destino profesional</h4>
                        <div class="buttons-banner">
                            <button>Planes</button>
                            <button>Contáctanos</button>
                        </div>
                    </div>
                    <img src="{{ asset('img/tarot1.png') }}" alt="logo">
                </div>
    
            </div>
        </div>
        <section class="container-que-hacemos">
            <img src="{{ asset('img/img2.png') }}" alt="">
            <div class="container-info-que-hacemos">
                <strong>QUE HACEMOS</strong>
                <h2>NUESTROS ASTRÓLOGOS TRABAJAN PARA TI</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inci Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsumdidunt ut labore et dolore magna Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum Lorem ipsum dolor sit amet.</p>
                <button>Empezar</button>
            </div>
        </section>

        <section class="container-nuestros-servicios">
            <strong>NUESTROS SERVICIOS</strong>
            <h2>LA ASTROLOGÍA ES SÓLO UN DEDO QUE SEÑALA LA REALIDAD</h2>
            <div class="container-card-nuestros-servicios">
                <div class="card-nuestros-servicios">
                    <div class="face front">
                        <img src="{{ asset('img/astro1.jpg') }}" alt="astro">
                        <h3>PREVISIÓN DE EVENTOS FUTUROS</h3>
                    </div>
                    <div class="face back">
                        <h3>PREVISIÓN DE EVENTOS FUTUROS</h3>
                        <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, iure. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, dicta?</P>
                    </div>
                </div>

                <div class="card-nuestros-servicios">
                    <div class="face front">
                        <img src="{{ asset('img/astro1.jpg') }}" alt="astro">
                        <h3>PREVISIÓN DE EVENTOS FUTUROS</h3>
                    </div>
                    <div class="face back">
                        <h3>PREVISIÓN DE EVENTOS FUTUROS</h3>
                        <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, iure. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, dicta?</P>
                    </div>
                </div>

                <div class="card-nuestros-servicios">
                    <div class="face front">
                        <img src="{{ asset('img/astro1.jpg') }}" alt="astro">
                        <h3>PREVISIÓN DE EVENTOS FUTUROS</h3>
                    </div>
                    <div class="face back">
                        <h3>PREVISIÓN DE EVENTOS FUTUROS</h3>
                        <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, iure. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, dicta?</P>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-conteo">
            <div class="card-conteo">
                <h2>75+</h2>
                <h3>Países</h3>
            </div>
            <div class="card-conteo">
                <h2>45+</h2>
                <h3>Astrólogos</h3>
            </div>
            <div class="card-conteo">
                <h2>10+</h2>
                <h3>Años</h3>
            </div>
            <div class="card-conteo">
                <h2>35+</h2>
                <h3>Socios</h3>
            </div>
        </section>

        <section class="container-planes">
            <h3>PLAN DE PRECIOS</h3>
            <h1>EL CIELO TE HABLA</h1>

            <div class="container-card-planes">
                <div class="card-planes">
                    <h3>ESTRELLA</h3>
                    
                    <div class="precio-plan">
                        <span class="dolar-plan">$</span>
                        <span class="numero-plan">99</span>
                        <span class="mes-plan">/mes</span>
                    </div>

                    <div class="caracteristicas-plan">
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <button>Empezar</button>
                </div>

                <div class="card-planes" id="plan-destacado">
                    <h3>CIELO</h3>
                    
                    <div class="precio-plan">
                        <span class="dolar-plan">$</span>
                        <span class="numero-plan">99</span>
                        <span class="mes-plan">/mes</span>
                    </div>

                    <div class="caracteristicas-plan">
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <button>Empezar</button>
                </div>

                <div class="card-planes">
                    <h3>ESPACIO</h3>
                    
                    <div class="precio-plan">
                        <span class="dolar-plan">$</span>
                        <span class="numero-plan">99</span>
                        <span class="mes-plan">/mes</span>
                    </div>

                    <div class="caracteristicas-plan">
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <button>Empezar</button>
                </div>
            </div>
        </section>

        <section class="container-respuesta-gratis">
            <div class="info-respuesta-gratis">
                <h2>OBTÉN UNA RESPUESTA A <br> UNA PREGUNTA GRATIS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, consequuntur!</p>
                <button>Empezar</button>
            </div>
            <img src="{{ asset('img/carta.webp') }}" alt="imagen">
        </section>

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