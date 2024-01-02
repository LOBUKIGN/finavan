<?php
    session_start();
    if (isset($_SESSION['user'])) {
?>
<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio|Finavan</title>
    <link rel="stylesheet" href="../assets/css/master.css">
    <!-- Icono en la pestaña (FINAVAN) -->
    <link rel="icon" href="../assets/resouces/img/finavana.png" type="image/x-icon">
    <!-- iconos de fontawesome -->
	<script src="https://kit.fontawesome.com/e728bb9503.js" crossorigin="anonymous"></script>	
    <script src="../assets/js/master.js"></script>
</head>
<body>
    
    <section class="containerr" id="menu">
        <?php
            include "../includes/header.php";
        ?>
        
        <div class="conten contenDesplegado">    
            <div class="box">
                <ul>
                    <li>
                        <img class="Exito" src="../assets/resouces/img/diapositiva/Exito.png" alt="">
                        <div class="texto">
                                <!-- <h2>Imagen1</h2> -->
                                <h2>¡Bienvenido al Mundo de las finanzas<?php echo " ".ucfirst( $_SESSION['nombreP']); ?>!</h2>
                                <p class="texto_Exito">"El tiempo es más valioso que el dinero. 
                                    Puedes obtener más dinero, pero no más tiempo." - Jim Rohn
                                </p>
                        </div>
                    </li>
                    <li>
                        <img class="Ahorro" src="../assets/resouces/img/diapositiva/Ahorro2.png" alt="">
                        <div class="texto">
                                <p class="texto_Ahorro">"Cultiva el ahorro hoy para 
                                    cosechar la fortuna mañana."
                                </p>
                        </div>
                    </li>
                    <li>
                        <img class="Deudas" src="../assets/resouces/img/diapositiva/Deudas.png" alt="">
                        <div class="texto">
                                <!-- <h2 class="Deudas">Imagen2</h2> -->
                                <p class="texto_Deudas">No te endeudes sin necesidad y, 
                                    si ya tienes deudas, prioriza su pago para liberarte de 
                                    ellas lo antes posible.
                                </p>
                        </div>
                    </li>
                    <li>
                        <img class="Imprevistos"src="../assets/resouces/img/diapositiva/Imprevistos2.png" alt="">
                        <div class="texto">
                                <p class="texto_Imprevistos">Crea un colchón financiero destinado a 
                                    afrontar imprevistos y gastos inesperados.
                                </p>
                        </div>
                    </li>

    
                </ul>
            </div>


            <div class="conenido">
                <div class="col-7 col-sm-12">
                    <div class="inicioImage">
                        <!-- <h3>¡Bienvenido <?php echo " ".ucfirst( $_SESSION['nombreP']); ?>!</h3> -->
                        <!-- <p>Cada moneda cuenta: pequeños ahorros, grandes logros</p> -->
                    </div>
                </div>
                <div class="col-5 col-sm-12 datos">
                    <div class="saldo"><img src="../assets/resouces/icons/Shape.png" alt=""> Saldo Disponible:10,000</div>
                    <div class="metas">
                        <div>Meta 1: 30%</div>
                        <div>Meta 2: 60%</div>
                    </div>
                    <div>Ahorro: 12,000</div>
                </div>
            </div>
            <!-- <div class="info" >
            <p>Evita acumular deudas innecesarias. Si tienes deudas, trabaja en pagarlas lo antes posible</p>
            <img src="" alt=""> -->
         
            <div class="conenido">
                <div class="col-3 col-sm-6 opcionesA">
                    <a href="" class="opciones">
                        <div>
                            <img class="metas" src="../assets/resouces/img/metas2.png" alt="">
                        </div>
                        <h3>Ingresos</h3>
                    </a>
                </div>
                <div class="col-3 col-sm-6 opcionesA">
                    <a href="" class="opciones">
                        <div>
                            <img src="../assets/resouces/img/b.png" alt="">
                        </div>
                        <h3>Gastos</h3>
                    </a>
                </div>
                <div class="col-3 col-sm-6 opcionesA">
                    <a href="" class="opciones">
                        <div>
                            <img src="../assets/resouces/img/a3.png" alt="">                
                        </div>
                        <h3>Metas</h3>
                    </a>
                </div>
                <div class="col-3 col-sm-6 opcionesA">
                    <a href="" class="opciones">
                        <div>
                            <img src="../assets/resouces/img/metas.png" alt="">                
                        </div>
                        <h3>Ahorro</h3>
                    </a>
                </div>
                <div class="col-3 col-sm-6 opcionesA">
                    <a href="" class="opciones">
                        <div>
                            <img src="../assets/resouces/img/metas.png" alt="">                
                        </div>
                        <h3>Deudas</h3>
                    </a>
                </div>
            </div>
            
            <?php
                include "../includes/footer.php";
            ?>
        </div>
    </section>
</body>
</html>
<?php
} else {
    header("Location: index.php?mensaje=69");
}
?>
