<?php  
$dbhost='localhost';/*nombre de servidor*/  
$dbusername='root';/*usuario de base de datos*/  
$dbuserpass='';/*contraseña, la deje en blanco para pruebas*/  
$dbname='prueba';/*nombre de la base de datos*/  
  
/*creamos el enlace a la bd*/ 
if($link = mysqli_connect ($dbhost, $dbusername, $dbuserpass,$dbname)){ 
}else{ 
    print "<script>alert('algo anda mal con la base de datos');</script>"; 
} 
?>  