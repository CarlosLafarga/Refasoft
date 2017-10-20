<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

      <link type="text/css" rel="stylesheet" href="../Content/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="../Content/fonts/fuentes.css" rel="stylesheet">
      <meta charset="utf-8">
      <script src="../Content/js/jquery.min.js"></script>
      <script src="../Content/js/materialize.min.js"></script>
      
</head>
<body BACKGROUND="../Content/img/LOGO.png" class="responsive-img">
 

<br><br>

<div class="container">
<center>
  <div class="row #eceff1 blue-grey lighten-5 z-depth-5" style="padding: 55px; border-radius: 17px; margin-left: 0px; max-width: 300px;">
  <form method="POST" action="../Modelo/validalogin.php" autocomplete="off">
    <center><i class="material-icons large z-depth-1">account_box</i></center>
    <input type="text" name="usuario" required autofocus="on" placeholder="Usuario">
    <label for="usuario" style="font-size: 16px; font-weight: bold;" >Usuario</label>

    <input type="password" name="pass" required onkeypress="return checkPassword(event)" placeholder="Contraseña">
    <label for="pass" style="font-size: 16px;font-weight: bold;">Contraseña</label><br><br>
    <button class="btn waves-effect waves-light"  type="submit" name="action">Entrar
    <i class="material-icons right">send</i>
  </button>
  
  <?php 
    if (isset($_GET['error'])==true) {
      echo "<font style='color: red; font-weight: bold;'><p><center>Usuario o contraseña incorrecto</center></p></font>";
    }
  ?>
  
  </form>
  </div>
  </center>
</div>

<script type="text/javascript">
function checkPassword(e)
  {
    var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
    return re.test(str);
  }
  
</script>


</body>
</html>