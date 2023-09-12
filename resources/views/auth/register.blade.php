<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Registrate</title>
</head>
<body>
    <div class="container-login">
        <form action="/register" method="post">
            @csrf
            <h1>Registrate</h1>
            <label class="input">
                <input class="input__field" type="text" placeholder="" name="name"/>
                <span class="input__label">Nombre</span>
            </label>
            <label class="input">
                <input class="input__field" type="email" placeholder="" name="email"/>
                <span class="input__label">Correo</span>
            </label>
            <label class="input">
                <input class="input__field" type="password" placeholder="" name="password"/>
                <span class="input__label">Contraseña</span>
            </label>
            <label class="input">
                <input class="input__field" type="password" placeholder="" name="password_confirmation"/>
                <span class="input__label">Confirmar contraseña</span>
            </label>

            <button type="submit">Registrate</button>
        </form>
    </div>
</body>
</html>
