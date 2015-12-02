<?php
function recogeDato($campo){
     return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';
 } //la funcion recogeDatos comprueba si se ha recibido un dato y recoge su valor

 $hostname = "localhost";
 $dbname = "jjjsyste_iActivityDB";
 $user = "jjjsyste_jele";
 $password = "jjjsystems.jele.12";

 //$usuario = $_GET['user'];
 echo '<script type="text/javascript">alert('.$usuario.')</script>';
 $nombre = recogeDato('act-name');
 $category = recogeDato('act-category');
 $date = recogeDato('act-date');
 $start = recogeDato('start-time');
 $end= recogeDato('fin-time');
 $location = recogeDato('location');
 $frequency = recogeDato('frequency');
 $range = recogeDato('range');

 $con = mysql_connect($hostname, $user, $password) or die("Cannot connect to DB");
 mysql_select_db($dbname) or die ("Cannot connect to DB2");

 if (!$con) {
     die('No pudo conectarse: ' . mysql_error());
 }
 $sql1 = "INSERT INTO ACTIVIDAD (nombre, categoria ) VALUES ('$nombre', '$category')";
 $sql = "INSERT INTO HORARIO (nombreUsuario, nombre, fecha, horaInicial, ubicacion, horaFinal, frecuenciaSemanal, satisfaccion )
          VALUES ('$usuario','$nombre', '$date', '$start', '$location', '$end', '$frequency', '$range')";
 echo "<script>console.log('$usuario')</script>";
 if (mysql_query($sql1) == TRUE && mysql_query($sql) == TRUE) {
 	      //echo "<script languaje='javascript'>alert('Registro Existoso!.')</script>";
         echo "<script language='javascript'>window.location='/../main.html'</script>";
 } else {
     echo "Error: " . $sql . "<br>" . $con->error;
     echo "Error: " . $sql1 . "<br>" . $con->error;
 }
 mysql_close($con);



 ?>
