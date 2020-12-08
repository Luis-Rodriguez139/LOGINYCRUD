<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="recursos/css/estilos.css">
    <?php
   
    session_start();
    if(isset($_SESSION['usuario'])){
       header('location:vistas/inicio.php');

    }
    ?>
    <title>Login</title>
</head>
<body style="background-color:#0EFBC2;>
<div id="contenedor">
   
   <div >
      <div >
         <form action="procesos/login/login.php" method="POST" id="form">
         <div id="divTitulo">
                <img src="recursos/img/descarga.png" alt="login" id="img1">

            </div>
         <div id="divCamposBoton">   
         <br><br>    
            <label for="nombre">Usuario</label><input type="text" name="usuario" id="usuario" placeholder="">
            <p></p>
            <label for="nombre">Password</label><input type="password" name="password" id="password"  placeholder="">
            <button id="entrarB">Entrar</button>
         </div>
            
            <a href="registro.php" id="registroLink">Registrarse</a>

             
         </form>

      </div>
   </div>

</div>
    
</body>
</html>