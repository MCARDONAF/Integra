<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Iniciar seision</title>
</head>
<body>
    <div class="container-login">
        <form action="/login" method="POST">
            @csrf
            <h1>Iniciar sesion</h1>
            <label class="input">
                <input class="input__field" type="email" placeholder=" " name="username"/>
                <span class="input__label">Correo</span>
            </label>

            <label class="input">
                <input class="input__field" type="password" placeholder=" "  name="password"/>
                <span class="input__label">Contraseña</span>
            </label>

            <button type="submit">Ingresar</button>
            <a href="/register">Registrate gratis</a>
        </form>
    </div>
</body>
</html>