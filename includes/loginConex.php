<?php  
session_start();
include "config.php";
if ($_POST['ing'] == "Ingresar") {
   $logins = array(
      'usuario' => $_POST['usuario'],
      'contrasena' => $_POST['contrasena'],
   );
   $camposVacios = false;
   foreach ($logins as $clave => $valor) {
      if (empty($valor)) {
         $camposVacios = true;
         break; 
      }
   }
   if($camposVacios==false){
      $query = "SELECT * FROM usuario WHERE usuario='".$logins['usuario']."' AND contrasena = '".$logins['contrasena']."'";
      $resultado = mysqli_query($conexion, $query);
      $contador = mysqli_num_rows($resultado); // Contamos las filas que coinciden
      if ($contador > 0) {
         $fila = mysqli_fetch_array($resultado);
         $_SESSION['nombre'] = $fila['nombre']." ".$fila['apellidop']." ".$fila['apellidom']; // Establecemos la variable de sesión 'user' con el ID del usuario
         $_SESSION['nombreP']=$fila['nombre'];
         $_SESSION['user'] = $fila['usuario'];
         header("Location: ../page/inicio.php");
      } else {
         header("Location: index.php?mensaje=69");
      }
   }else{
      header("Location: index.php?mensaje=12");
   }

}
?>
