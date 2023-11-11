<!DOCTYPE html>

<html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Righteous&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="../../build/css/app.css">
        <title>Iniciar Sesión</title>
    </head>

    <body>

        <main class="login">

            <div class="rectangle"></div>
            <div class="chandelier"></div>
            <div class="person"></div>

            <div class="login__contenedor">
                
                <h1 class="login__titulo">Iniciar Sesión</h1>

                <form class="formulario-login" action="http://localhost/tienda-libros-app-web/views/public/" method="post">

                    <div class="formulario-login__campo">

                        <input class="formulario-login__input" type="text" required>
                        <span></span>
                        <label class="formulario-login__label">Usuario</label>
                    </div>

                    <div class="formulario-login__campo">
                        <input class="formulario-login__input" type="password" required>
                        <span></span>
                        <label class="formulario-login__label">Contraseña</label>
                    </div>

                    <a href="#" class="formulario-login__enlace">¿Olvidaste tu contraseña?</a>

                    <input type="submit" value="Ingresar" class="formulario-login__input--submit">

                    <div class="formulario-login__registrarse">
                        ¿No tienes una cuenta? <a href="#" class="formulario-login__registrarse-enlace">Regístrate</a>
                    </div>
                </form>
            </div>
        </main>
    </body>

</html>