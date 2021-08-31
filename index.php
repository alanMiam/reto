<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estiloC.css">
    <title>Inicio de sesion</title>
  </head>
  <body >
    <header>SISTEMAS II</header>
    <div class="tarjeta">
      <h1>Ingresar</h1>
      <form action="validar.php" method="post" >
        <input type="text" placeholder="USUARIO" name="usuario" class="text" maxlength="30" size="30">
        <br>
        <br>
        <br>
        <input type="password" placeholder="CONTRASEÑA" name="contraseña" class="text" maxlength="40" size="30">
        <br>
        <br>
        <input type="submit" value="Ingresar" class="boton">
        <br>
        <br>
        <a href="recuperar.html"><input type="button" value="Olvidé mi contraseña" class="boton1"></a>
        <br>
        <h1>¿Aún no tiene una cuenta?</h1>
        <a href="registrar.php"><input type="button" value="¡Regístrese!" class="boton1"></a>
        <br>
      </form>
    </div>
  </body>
</html>