<!DOCTYPE html >
<html >
  <head>
    <meta charset="utf-8">
    <title> Personaliza tu mensaje </title>
    <link rel="stylesheet" href="estilo-login.css">
    <?php $tipo=$_GET['Cancion']; ?> <!-- CAMBIO: Adaptar link a CSS -->
  </head>
  <body>
    <div class="login-box">
      <h1> Selecciona el país de la radio: <?php echo $tipo; ?> </h1>
        <!-- ENTRADA DE NOMBRE DE USUARIO -->
        <a  href="final.html?idCancion=12"><img class= "imagenE"  width="400" height="300" src="img/esp.png"></a>
        &nbsp;
        <a href="URL DESTINO"><img class="imagenE"  width="150" height="70" src="img/arg.png"></a>
        &nbsp;
        <a href="URL DESTINO"><img class="imagenE"  width="150" height="70" src="img/mex.png"></a>
        &nbsp;
        <a href="URL DESTINO"><img class="imagenE"  width="150" height="70" src="img/eeuu.png"></a>
        <br></br>
        <a href="URL DESTINO"><img class="imagenE"  width="150" height="70" src="img/uk.png"></a>
    </div>
    <script src="scripts/script-login.js"></script> 
  </body>
</html>
