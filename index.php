
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Dashboard DevOps</title>

    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="login-container">

        <h1>Dashboard DevOps</h1>
        <h2>Iniciar sesión</h2>

        <form id="loginForm">

            <label for="username">Usuario</label>
            <input 
                type="text" 
                id="username" 
                name="username"
                placeholder="Ingrese su usuario"
                required
            >

            <label for="password">Contraseña</label>

            <div class="password-container">
                <input 
                    type="password" 
                    id="password" 
                    name="password"
                    placeholder="Ingrese su contraseña"
                    maxlength="8"
                    required
                >

                <button type="button" id="togglePassword">👁</button>
            </div>

            <div id="password-message">
                <p>La contraseña debe cumplir:</p>
                <ul>
                    <li id="length">Máximo 8 caracteres</li>
                    <li id="number">Al menos 1 número</li>
                    <li id="uppercase">Al menos 1 mayúscula</li>
                    <li id="special">Al menos 1 carácter especial</li>
                    <li id="space">No contener espacios</li>
                </ul>
            </div>

            <button type="submit">Iniciar sesión</button>

        </form>

    </div>

    <script src="js/login.js"></script>

</body>
</html>
