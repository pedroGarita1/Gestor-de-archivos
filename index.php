<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="librerias/bootstrap4/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/logo.png" id="icon" alt="User Icon" />
      <h1>Gestor de archivos</h1>
    </div>

    <!-- Login Form -->
    <form method ="post" id="frmLogin" onsubmit="return logear()">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario" required="">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña" required="">
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="registro.php">Registrar</a>
    </div>

  </div>
</div>
<script src="librerias/jquery-3.4.1.min.js"></script>
<script src="librerias/sweetalert.min.js"></script>

  <script type="text/javascript">
  function logear(){
    $.ajax({
      type: "POST",
      data: $('#frmLogin').serialize(),
      url:"procesos/usuario/login/login.php",
      success:function(respuesta){
        respuesta = respuesta.trim();
        if(respuesta == 1){
          window.location = "vistas/inicio.php";
        }else{
          swal(":c","Fallo al entrar!","ERROR")
        }
      }
    });
    return false;
  }
  </script>

</body>
</html>