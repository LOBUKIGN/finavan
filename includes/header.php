<div class="menuDesplegado">
    <div class="prefil">
        <div class="perfilFoto">
            <img src="../assets/resouces/icons/user.png" alt="">
        </div>
        <div>
            <p class="usuario">
                <?php 
                    echo  $_SESSION['user'].":";
                    //  <br>. Imprime el usuario
                ?>
            </p>
            <p class="nombre">
                <?php 
                    echo $_SESSION['nombre']; 
                ?>
            </p>
        </div>
        <div id="close">
            <span><</span>
        </div>
    </div>
    <nav>
        
        <ul>
            
            <button class="switch" id="switch">
                <!-- luna -->
				<span><i class="fa-solid fa-moon"></i></span>
				<!-- sol -->
				<span><i class="fa-solid fa-sun"></i></span>

			</button>
            <li><a href="">Inicio</a></li>
            <li><a href="">Ingresos</a></li>
            <li><a href="">Gastos</a></li>
            <li><a href="">Metas</a></li>
            <li><a href="">Ahorro</a></li>
            <li><a href="">Perfil</a></li>
        </ul>
    </nav>
    <div class="salir"><a href="destruir.php">CERRAR SESIÓN</a></div>
</div>
<header class="menu">
    <section>
        <div class="hamburger " id="colapce">
            <p></p>
        </div>
    </section>
    <section>
        <img src="../assets/resouces/img/finavans.png" alt="">
        
    </section>
    <!-- JavaScri,ModoNohe -->
    <script src="../assets/js/main.js"></script>
    
</header> 
