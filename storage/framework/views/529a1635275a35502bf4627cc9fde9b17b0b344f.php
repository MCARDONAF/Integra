<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <title>Inicío</title>
</head>
<body>
    <nav>
        <img class="logo" src="" alt="logo">
        <div>
            <a href="/home">Inicio</a>
            <a href="/planes">Planes</a>
            <a href="/login">Iniciar sesion</a>
        </div>

        <?php if(auth()->guard()->check()): ?>
            <div>
                <p>Hola! <?php echo e(auth()->user()->name); ?></p>
            </div>
        <?php endif; ?>

    </nav>

    <main>
        <div>
            <img src="" alt="Banner">
            <h1>Confía en nuestra experiencia</h1>
            <h5>Inicia el control de tu destino profesional</h5>
            <div>

                <button>Planes</button>
                <button>Contactanos</button>
            </div>
        </div>
        <section>
            <img src="" alt="">
            <div>
                <strong>QUE HACEMOS</strong>
                <h2>NUESTROS ASTRÓLOGOS TRABAJAN PARA TI</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inci Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsumdidunt ut labore et dolore magna Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum Lorem ipsum dolor sit amet.</p>
                <button>Empezar</button>
            </div>
        </section>

        <section>
            <strong>NUESTROS SERVICIOS</strong>
            <h2>LA ASTROLOGÍA ES SÓLO UN DEDO QUE SEÑALA LA REALIDAD</h2>
            <div>
                <div>
                    <img src="" alt="imagen">
                    <P>PREVISIÓN DE EVENTOS FUTUROS</P>
                    <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, iure.</P>
                </div>
            </div>
        </section>

        <section>
            <div>
                <img src="" alt="imagen">
                <p>95+</p>
                <p>Países</p>
            </div>
        </section>

        <section>
            <h3>PLAN DE PRECIOS</h3>
            <h1>EL CIELO TE HABLA</h1>

            <div>
                <div>
                    <h3>ESTRELLA</h3>
                    <h4>$30.000/Mes</h4>
                    <ul>
                        <li>Consejos de vida personal</li>
                        <li>Forcecast por mes</li>
                        <li>Carta Natal</li>
                        <li>Forcecast por año</li>
                    </ul>

                    <button>Empezar</button>
                </div>
            </div>
        </section>

        <section>
            <div>
                <h2>OBTÉN UNA RESPUESTA A <br> UNA PREGUNTA GRATIS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, consequuntur!</p>
                <button>Empezar</button>
            </div>
            <img src="" alt="imagen">
        </section>

    </main>

    <footer>
        <div>
            <h3>Empieza con nuestros planes</h3>
            <button>Ver planes</button>
        </div>
        <div>
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
        <div>
            <hr>
            <p>Copyright @ 2023 Todos los derechos reservados</p>
        </div>
    </footer>





    <h1>Home</h1>
    <?php if(auth()->guard()->check()): ?>
        <p>esto es lo que pasa cuando estas auto  <?php echo e(auth()->user()->name); ?> </p>
        <a href="/logout">Cerrar sision</a>
    <?php endif; ?>

    <?php if(auth()->guard()->guest()): ?>
        <p>no estas iniciado</p>
    <?php endif; ?>

</body>
</html><?php /**PATH C:\Users\tecnologia\OneDrive\Escritorio\michael\esoterismo\resources\views\home.blade.php ENDPATH**/ ?>