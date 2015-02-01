<?php

 include('configuracion.php');

$date = date('Y-m-d H:i:s');

 $query = "INSERT INTO respuestas (idusuario,idpost,mensaje,titulo,fecha) VALUES ('1', '$_POST[postid]', '$_POST[mensaje]', '$_POST[titulo]', '".$date."')";
 mysqli_query($link, $query);


$sql = "SELECT * FROM foro  where id='".$_POST['postid']."'";
$result=mysqli_query($link,$sql);
	while($row = mysqli_fetch_array($result))
	{ $comentarios=$row['respuestas'];}
$comentarios=$comentarios+1;
$sql = "UPDATE foro SET respuestas='$comentarios',respuestault='$date' where id='".$_POST['postid']."'";
mysqli_query($link, $sql);


 mysqli_close($link)
?>
<script type="text/javascript">
window.location.href ="index.php"; //This is a possibility
</script>
<?php
?>