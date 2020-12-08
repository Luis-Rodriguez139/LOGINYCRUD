<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="recursos/css/estilosRegistro.css">
    <title>Registro de Usuarios</title>
</head>
<body style="background-color:#0EFBC2>
<div id="contenedor">
    <form action="procesos/login/registro.php" method="POST" id="form">
     <div id="divCamposBoton">   
       <input type="text" name="nombre" placeholder="Nombre">
       <input type="text" name="apellido" placeholder="Apellido Materno">
       <input type="email" name="email" placeholder="Email">
       <input type="text" name="usuario" placeholder="Usuario">
       <input type="password" name="password" placeholder="Password">
       <button id="entrarB">Registrar</button>
     </div>
       <a href="index.php" id="registroLink">Login</a>
       
    </form>

</div>
</body>
</html>