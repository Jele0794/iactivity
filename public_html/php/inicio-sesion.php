<?php
function recogeDato($campo){
     return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';
 } //la funcion recogeDatos comprueba si se ha recibido un dato y recoge su valor

 $hostname = "localhost";
 $dbname = "jjjsyste_iActivityDB";
 $user = "jjjsyste_jele";
 $password = "jjjsystems.jele.12";

 $email = recogeDato('email');
 $passwordlog = recogeDato('password');

 $con = mysql_connect($hostname, $user, $password) or die("Cannot connect to DB");
 mysql_select_db($dbname) or die ("Cannot connect to DB2");

 if (!$con) {
     die('No pudo conectarse: ' . mysql_error());
 }

 $sql = "SELECT * FROM USUARIO WHERE email = '$email' AND contrasena = '$passwordlog'";
 $result = mysql_query($sql) or die("DB Error");

 $total = mysql_num_rows($result);

 if ($result == true) {

	  while($row = mysql_fetch_array($result)){
echo "<script language='javascript'>window.location='/../main.html';sessionStorage.nombre='".$row['nombre']."';sessionStorage.email='".$row['email']."';
      sessionStorage.nacimiento='".$row['fechaNacimiento']."';sessionStorage.estado='".$row['estado']."';
      sessionStorage.pais='".$row['pais']."';sessionStorage.universidad='".$row['universidad']."';
      sessionStorage.carrera='".$row['carrera']."';sessionStorage.semestre='".$row['semestre']."';</script>";

 // 	   echo "<script language='javascript'>window.location='/../main.html';sessionStorage.objUsuario=usuario('".$row['nombre']."','".$row['apellidos']."','".$row['email']."','".$row['contrasena']."','".$row['fechaNacimiento']."','','".$row['estado']."','','".$row['carrera']."',".$row['semestre'].");</script>";
 	 }

 } else {
      echo "0 results";
 }


 ?>
