<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  
  <?php include("../Section/css.php");?>
      
</head>
<body class="gray-bg" >
 
   <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Welcome to IN+</h2>

                <p>
                    Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                </p>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>

                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <p>
                    <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
                </p>

            </div>
<div class="col-md-6">
    <div class="ibox-content">
  <form method="POST" action="../Modelo/validalogin.php" autocomplete="off">

    <div class="form-group">
    <label for="usuario">Usuario</label>
    <input  class="form-control" type="text" name="usuario" required autofocus="on" placeholder="Usuario">
    </div>
    <div class="form-group">
    <label for="pass" >Contraseña</label>
    <input class="form-control" type="password" name="pass" required onkeypress="return checkPassword(event)" placeholder="Contraseña">
    </div>
    
    <button class="btn btn-primary"  type="submit" name="action">Entrar</button>
  
  <?php 
    if (isset($_GET['error'])==true) {
       echo "<font style='color: red; font-weight: bold;'><p><center>Usuario o contraseña incorrecto</center></p></font>";
    }
  ?>
  
  </form>
 <p class="m-t">
                        <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Example Company
            </div>
            <div class="col-md-6 text-right">
               <small>© 2014-2015</small>
            </div>
        </div>
    </div>
<script type="text/javascript">
  function checkPassword(e){
    var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
    return re.test(str);
  }
  
</script>


</body>
</html>