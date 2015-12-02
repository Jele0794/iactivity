<?php
  //comenzamos recogiendo los datos
function recogeDato($campo){
     return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';
 } //la funcion recogeDatos comprueba si se ha recibido un dato y recoge su valor

 $hostname = "localhost";
 $dbname = "jjjsyste_iActivityDB";
 $user = "jjjsyste_jele";
 $password = "jjjsyst3.2015";

$fname = "<script> document.write(_nombre_)</script>" ;
echo "nomnre" . $fname;
$lname = "<script> document.write(_apellidos_)</script>" ;
$emailr = "<script> document.write(_email_)</script>" ;
$passr = "<script> document.write(_password_)</script>" ;
$bthdt = "<script> document.write(_nacimiento_)</script>" ;
$country = "<script> document.write(_pais_)</script>" ;
$state = "<script> document.write(_estado_)</script>" ;
$college = "<script> document.write(_universidad_)</script>" ;
$career = "<script> document.write(_carrera_)</script>" ;
$semester = "<script> document.write(_semestre_)</script>" ;

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
