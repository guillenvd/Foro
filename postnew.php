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





<table width="90%" border="0" cellspacing="2" cellpadding="2">
  <form  action="post.php" method="post">
    <input type="hidden" name="identificador" value="<?=$id?>">
    <tr> 
      <td width="30%" align="right">Titulo</td>
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
    <td align="center">Foro </td>
  </tr>
</table>
</body>
</html>