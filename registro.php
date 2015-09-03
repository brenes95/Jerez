<? 
			
//Recibimos los parametros enviados mediante POST por el Formular
//Configuracion de la conexion a base de datos
  $bd_host = "jtaurinajerez.com.mysql"; 
  $bd_usuario = "2548547"; 
  $bd_password = "3B6yUqe3"; 
  $bd_base = "2548547"; 
 
$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
mysql_select_db($bd_base, $con); 
 
//variables POST
  $nom=$_POST['nom'];
  $apellidos=$_POST['apellidos'];
  $tlf=$_POST['tlf'];
  $email=$_POST['email'];
  $descripcion=$_POST['descripcion'];
  $incidencia=$_POST['incidencia'];
  $dir=$_POST['dir'];
  
 //- 
  
	
 
//registra los datos del empleados
  $sql="INSERT INTO incidencias (nom, apellidos, tlf, email, descripcion, incidencia, dir) VALUES ('$nom', '$apellidos', '$tlf', '$email', '$descripcion', '$incidencia', '$dir')";
mysql_query($sql,$con) or die('Error. '.mysql_error());

			
?>

<!DOCTYPE html> 
<html>
<head>
	<title>Page Title</title>
	<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/git/jquery.mobile-git.min.js"></script>
</head>

<body>
	<div data-role="page" id="mainpage">
    <div data-role="header">
    </h1> Incidencia reportada:</h1>
    </div>
    <div data-role="content">
    <p>Incidencia: <? echo $incidencia;?></p>
    <p>Incidencia: <? echo $dir;?></p>
    </div>
    </div>
</body>
</html>