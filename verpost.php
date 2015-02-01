<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>FORO</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
/* unvisited link */
a:link {
    color: white;
}

/* visited link */
a:visited {
    color: white;
}

/* mouse over link */
a:hover {
    color: white;
}

/* selected link */
a:active {
    color: white;
}
</style>
</head>

<body bgcolor="#9999cc" text="#FFFFFF" link="#FFFFFF">
<table width="90%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td bgcolor="#4b557d"><h2>FORO</h2>
      <div align="right">[ <a href="index.php">Inicio</a> ] [ <a href="postnew.php">Nuevo 
        Tema</a> ]</div></td>
  </tr>
</table>

<?php
include('configuracion.php');
$sql = "SELECT * FROM foro  where id='".$_GET['id']."'";
$result=mysqli_query($link,$sql);
echo"<table width=\"90%\" border=\"0\" align=\"center\" cellpadding=\"2\" cellspacing=\"2\">";
while($row = mysqli_fetch_array($result))
	{
           echo"Titulo del tema: "; echo $row['titulo'];    echo"<br>";
	 echo"Autor del tema: "; echo $row['autor']; echo"<br>";
           echo"Fecha del tema: "; echo $row['fecha']; echo"<br>";
	 echo"Numeros de tema: "; echo $row['respuestas'];echo"<br>";
	 echo"Texto: "; echo $row['mensaje'];echo"<br>";
     	 echo"Ultima respuesta del tema: "; echo $row['respuestault'];echo"<br>";
          }
echo"</tr></table>";

?>
<table width="90%" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#4b557d">
  <tr>
    <td align="center">Responder </td>
  </tr>
</table>
<table width="90%" border="0" cellspacing="2" cellpadding="2">
  <form  action="postresp.php" method="post">
   <input type="hidden" value="<?php echo $_GET['id'] ;?>" name="postid" />
    <tr> 
      <td width="30%" align="right">Titulo de respuesta</td>
      <td><input type="text" name="titulo"></td>
    </tr>
    <tr> 
      <td width="30%" align="right">Mensaje</td>
      <td><textarea name="mensaje" cols="50" rows="5"></textarea></td>
    </tr>
    <tr> 
      <td colspan="2" align="center"><input type="submit" name="Submit" value="Enviar Mensaje"></td>
    </tr>
  </form>
</table>
<table width="90%" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#4b557d">
  <tr>
    <td align="center">Respuestas </td>
  </tr>
</table>

<?php
$i=0;
$sql = "SELECT * FROM respuestas  where idpost='".$_GET['id']."' ORDER BY fecha DESC";
$result=mysqli_query($link,$sql);
echo"<table width=\"90%\" border=\"0\" align=\"center\" cellpadding=\"2\" cellspacing=\"2\">";
while($row = mysqli_fetch_array($result))
	{$i+=1;
           echo"Titulo del tema: "; echo $row['titulo'];    echo"<br>";
	 echo"Autor del tema: "; echo $row['idusuario']; echo"<br>";
           echo"Fecha del tema: "; echo $row['mensaje']; echo"<br>";
	 echo"Numeros de tema: "; echo $row['fecha'];echo"<br>";echo"<br>";echo"<br>";
          }
if($i==0) echo"nadie a contestado todav&iacute;a";
echo"</tr></table>";

 mysqli_close($link); 
?>


<table width="90%" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#4b557d">
  <tr>
    <td align="center">Foro </td>
  </tr>
</table>