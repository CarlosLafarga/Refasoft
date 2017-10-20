
<?php 
	session_start();
	unset($_SESSION["nombre"]);
	$username=trim($_POST['usuario']); 
	$password=trim($_POST['pass']);
	
		$db="refaccionaria";
		$host="localhost";
		$pw="";
		$user="root";
		
		if (empty($username) || empty($password)) {
			header("location: ../Vista/login.php");
			echo "";
			exit();

		}

		//require_once('singleton.php');

		$con = mysqli_connect($host,$user,$pw,$db) or die("Error al conectar ".mysql_error());
		
		$query = "SELECT * FROM usuario WHERE Usuario= '$username' AND Contrasena = '$password'";
		$result=mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($result);
		if (!isset($row)) {
			header("location: ../Vista/login.php");
		}

		$nombre=$row["Nombre"];
		$apellido=$row["Apellido"];
		$Tipo=$row['Tipo'];
		$id=$row['id'];

		if ($Tipo=='1') {
			if($row["Contrasena"] === $password && $row["Usuario"] === $username) {
				session_start(); 
				$_SESSION["nombre"]=$nombre;
				$_SESSION["apellido"]=$apellido;
				$_SESSION["id"]=$id;
				
				

				echo " 
                <script language='JavaScript'>
                var mensaje = 'sesión iniciada'; 
                alert(mensaje); 
                </script>";

				header("location: ../Vista/inicio.php");
				
			}else{
				echo " 
                <script type='text/javascript'> 
                alert('Usuario o contraseña incorrecto'); 
                </script>";

				header("location: ../Vista/login.php?error=1");
				exit();
			}
		}elseif ($Tipo=='2') {
			if($row["Contrasena"] === $password && $row["Usuario"] === $username) {
				session_start(); 
				$_SESSION["nombre"]=$nombre;
				$_SESSION["apellido"]=$apellido;
				echo " 
                <script language='JavaScript'>
                var mensaje = 'sesión iniciada'; 
                alert(mensaje); 
                </script>";

				header("location: ../Vista/inicioadmin.php");
				
			}else{
				echo " 
                <script type='text/javascript'> 
                alert('Usuario o contraseña incorrecto'); 
                </script>";

				header("location: ../Vista/login.php?error=1");
				exit();
			}
		}elseif ($Tipo=='3') {
			if($row["Contrasena"] === $password && $row["Usuario"] === $username) {
				session_start(); 
				$_SESSION["nombre"]=$nombre;
				$_SESSION["apellido"]=$apellido;
				echo " 
                <script language='JavaScript'>
                var mensaje = 'sesión iniciada'; 
                alert(mensaje); 
                </script>";

				header("location: ../Vista/Bienvenidacont.php");
				
			}else{
				echo " 
                <script type='text/javascript'> 
                alert('Usuario o contraseña incorrecto'); 
                </script>";

				header("location: ../Vista/login.php?error=1");
				exit();
			}


		
		}
		

?>
