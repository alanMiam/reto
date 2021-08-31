<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel ="stylesheet" type="text/css" href="estiloD.css">
  </head>
  <body>
  <header> RETO SISTEMAS 2</header>
    <div class="contenedor">
      <div class="tarjeta">
      <h1>Registrar</h1>
        <form  method="POST" >
          <input type="text" name="nombre" placeholder="NOMBRE DE USUARIO" class="text">
          <br/>    
          <br/>
          <input type="email" name="correo" placeholder="EMAIL" class="text">
          <br/> 
          <br/>
          <input type="password" name="contraseña" placeholder="CONTRASEÑA" class="text">
          <br/>
          <br/>
          <p>Pregunta de seguridad</p>
          <select class="text">
            <option>Nombre de la mascota de la infancia</option>
            <option>Clase favorita de la licenciatura</option>
            <option>Platillo favorito</option>
            <option>Pokémon favorito</option>
          </select>
          <br/>
          <br/>
          <input type="submit" id="registrar" name ="registrar" value="Registrar" class="boton">
          <br/>
          <br/>
          <a href="index.php"><input type="button" value="Cancelar" class="boton1"></a>
        </form>
        <?php
      include("acRegistrar.php");
    ?>
      </div>  
    </div>
    
  </body>
</html>
