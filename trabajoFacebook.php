<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio Facebook</title>
    <script src="js/trabajoFace.js" charset="utf-8"></script>
    <link rel="stylesheet" href="css/facebook.css">
  </head>
  <body>
    <br>
    <ul class="forma">
      <li>facebook</li>
    </ul>
    <form action="trabajoFace.php" method="GET">
      <table class="ingreso">
      <tr>
        <td>Email o teléfono</td>
        <td class="alinear">Contraseña</td>
        <td></td>
      </tr>
      <tr>
        <td><input type="text" name="txtEmail" value="" placeholder="correo electronico"></td>
        <td class="alinear"><input type="password" name="txtContraseña" value="" placeholder="contraseña"></td>
        <td><input type="submit" name="" value="Entrar" class="entrarB"></td>
      </tr>
      <tr>
        <td></td>
        <td  class="alinear" style="font-size: 13px"><a href="#" style="color:#ffffff">has olvidado los datos de la cuenta?</a></td>
      </tr>
      </table>
    </form>
<br>
<br>
    <p class="parra1">Facebook ayuda a comunicarte y a compartir</p>
    <p class="parra2">con las personas que conoces</p>

    <p class="parra3">Registrate</p>
    <p class="parra4">es gratis y cualquiera puede unirse</p>
<br>
    <form action="trabajoFace.php" method="GET" onsubmit="return validar()" action="sendDate.php">
      <table class="tablaFecha">
        <tr>
          <td class="alinearTexto">Nombre</td>
          <td colspan="3"><input type="text" name="txtNombre" required class="botonB" placeholder="Diego Armando"></td>
        </tr>
        <tr>
          <td class="alinearTexto">Apellidos</td>
          <td colspan="3"><input type="text" name="txtApellido" required class="botonB" placeholder="Torres Casapía"></td>
        </tr>
        <tr>
          <td class="alinearTexto">direccion de <br>correo electronico</td>
          <td colspan="3"><input type="email" name="txtEmail" required class="botonB" placeholder="ejemplo@gmail.com"></td>
        </tr>
        <tr>
          <td class="alinearTexto">Contraseña <br>Nueva</td>
          <td colspan="3"><input type="password" id="psw1" name="psw1" required class="botonB" placeholder="************"></td>
        </tr>
        <tr>
          <td class="alinearTexto">Contraseña <br>Nueva</td>
          <td colspan="3"><input type="password" id="psw2" name="psw2" required class="botonB" placeholder="************"></td>
        </tr>
        <tr>
          <td class="alinearTexto">Sexo</td>
          <td>
            <select value="Selecciona el Sexo" name="selectSexo" class="botonB">
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
              <option value="O">Otro</option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="alinearTexto">Fecha de <br>Nacimiento</td>
          <td>
            <select name="selectAño" class="botonB">
              <?php
              for($x=2020;$x>=1980;$x--)
                echo "<option value='".$x."'>".$x."</option>";
               ?>
            </select>
          </td>
          <td>
            <select name="selectMes" class="botonB">
              <option value="1">Enero</option>
              <option value="2">Febrero</option>
              <option value="3">Marzo</option>
              <option value="4">Abril</option>
              <option value="5">Mayo</option>
              <option value="6">Junio</option>
              <option value="7">Julio</option>
              <option value="8">Agosto</option>
              <option value="9">Setiembre</option>
              <option value="10">Octubre</option>
              <option value="11">Noviembre</option>
              <option value="12">Diciembre</option>
            </select>
          </td>
          <td>
            <select name="selectDia" class="botonB">
              <?php
              for($x=1;$x<=31;$x++)
                echo "<option value='".$x."'>".$x."</option>";
               ?>
            </select>
          </td>
        </tr>
        <tr>
          <td></td>
          <td  colspan="3"><a href="#">¿Por que debo proporcionar esta informacion?</a></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="" value="Registrar" class="btnRegistrar"></td>
        </tr>
        <tr>
          <td colspan="4" class="botonB">_________________________________________</td>
        </tr>
        <tr>
          <td colspan="4"><a href="#">Crea una pagina</a> para una celebridad,grupo de musica o empresa.</td>
        </tr>
      </table>
    </form>
  </body>

</html>
