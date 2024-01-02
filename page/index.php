<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icono en la pestaña (FINAVAN) -->
    <link rel="icon" href="../assets/resouces/img/finavana.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Inicio|Registro</title>
</head>


<body>
    <div class="container" id="container" >
        <div class="form-container sign-up">
            <form method="POST" action="../includes/regisConex.php">
                <h1 class="registro">Registrarte</h1>
                <input type="text" name="usuario" placeholder="Usuario">
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="apellidom" placeholder="Apellido Materno">
                <input type="text" name="apellidop" placeholder="Apellido Paterno">
                <input type="email" name="correo" placeholder="Correo">
                <input type="password" name="contrasena" placeholder="Contraseña">
                <input type="text" name="telefono" placeholder="Telefono">
                <input type="text" name="img" placeholder="Imagen De Usuario">

                <button value="Registrar">Registrate</button>
            </form>
        </div>

        <!-- Inicio de sesion -->
        <div class="form-container sign-in">
            <form action="../includes/loginConex.php" method="post">
                <div class="logo">
                    <img class="logo" src="../assets/resouces/img/finavan.png" alt="EmpresaSinLugro">
                </div> 
                <input type="text" name="usuario" placeholder="Usuario">
                <input type="password" name="contrasena" placeholder="Contraseña">
                <button value="Ingresar" name="ing">Iniciar Sesión</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1 class="mensaje">"Ahorra con inteligencia, elige Finavan, elige libertad"</h1>
                    <img class="puerqui" src="../assets/resouces/img/puercobb.png" alt="todos los derechos">
                    <!-- <p>Ingrese sus datos personales para utilizar todas las funciones del sitio</p> -->
                    <button class="hidden" id="login">Comencemos</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1 class="mensaje">¡Bienvenido a tu viaje hacia la libertad financiera!</h1>
                    <p>Cada pequeño paso cuenta. ¡Estás en el camino correcto para alcanzar tus metas!</p>
                    <button class="hidden" id="register">Registrate</button>
                </div>
            </div>
        </div>

    </div>


    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>