<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/facebook.css">
    <title></title>
  </head>
  <body>
    <?php
    $email=$_GET[txtEmail];
    $contraseña=$_GET[txtContraseña];

    if($email=="Diego01@gmail.com")
    if($contraseña=="12345678")
    echo "<ul class='forma'>
      <li align='center'>Bienvenido a facebook</li>
    </ul>";
    else
    echo "<ul class='formaError'>
      <li align='center'>Error en Contraseña</li>
    </ul>";
    else
    echo "<ul class='formaError'>
      <li align='center'>Error en usuario</li>
    </ul>";
     ?>
     <br><br><br><br><br><br>
     <figure class="derecha">
     <img src="imagenes/logoFace.png" alt="" width="">
     <figcaption></figcaption>
     </figure>
  </body>
</html>
