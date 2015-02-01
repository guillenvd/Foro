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
require('configuracion.php');
$sql = "SELECT * FROM foro  ORDER BY fecha DESC";

if(!$result=mysqli_query($link,$sql))
{ $count=0; echo"<center>No hay nada en posteado</center>";}
else
{ $count = mysqli_num_rows($result); }
if($count>0)
{
	include('titulos.html');
  echo"<table width=\"90%\" border=\"0\" align=\"center\" cellpadding=\"2\" cellspacing=\"2\">";
	while($row = mysqli_fetch_array($result))
	{
  echo"<tr><td>";
    echo $row['titulo'];    
 echo"</td><td width=\"15%\" align=\"center\">Por "; 
		echo $row['autor']; 
 echo"</td>";
      echo"</td><td width=\"15%\" align=\"center\"> "; 
				echo $row['fecha']; 

 echo"</td>";

 echo"<td width=\"15%\" align=\"center\">";
	echo $row['respuestas'];
  echo" </td><td width=\"15%\" align=\"center\"> ";
     	echo $row['respuestault'];
 echo"</td>";
echo" <td width=\"15%\" align=\"center\"> 
<a href=\"verpost.php?id=";echo $row['id'];echo"\">IR A</a>";
 echo"</td>";
 	}
	
echo"</tr></table>";
}
?>



<table width="90%" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#4b557d">
<tr>
    <td align="center">Foro </td>
  </tr>
</table>
</body>
</html>
