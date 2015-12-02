<?php
  //comenzamos recogiendo los datos
function recogeDato($campo){
     return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';
 } //la funcion recogeDatos comprueba si se ha recibido un dato y recoge su valor

 $hostname = "localhost";
 $dbname = "jjjsyste_iActivityDB";
 $user = "jjjsyste_jele";
 $password = "jjjsyst3.2015";

$fname = recogeDato("fname");
$lname = recogeDato("lname");
$emailr = recogeDato("emailr");
$passr = recogeDato("passr");
$bthdt = recogeDato("bthdt");
$country = recogeDato("country");
$state = recogeDato("state");
$college = recogeDato("college");
$career = recogeDato("career");
$semester = recogeDato("semester");

$con = mysql_connect($hostname, $user, $password) or die("Cannot connect to DB");
mysql_select_db($dbname) or die ("Cannot connect to DB2");

if (!$con) {
    die('No pudo conectarse: ' . mysql_error());
}
$sql = "INSERT INTO USUARIO (contrasena, nombre, apellidos, fechaNacimiento, email, estado, carrera, semestre ) VALUES ('$passr', '$fname', '$lname', '$bthdt', '$emailr', '$state', '$career', $semester)";

if (mysql_query($sql) === TRUE) {
	      //echo "<script languaje='javascript'>alert('Registro Existoso!.')</script>";
        echo "<script language='javascript'>window.location='/../main.html'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
mysql_close($con);

 ?>
