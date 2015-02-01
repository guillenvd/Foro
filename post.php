<?php

 include('configuracion.php');

$date = date('Y-m-d H:i:s');

 $query = "INSERT INTO  foro (autor,titulo,fecha,mensaje) VALUES ('1', '$_POST[titulo]', '".$date."', '$_POST[mensaje]')";
 mysqli_query($link, $query);

 mysqli_close($link)
 ?>
<script type="text/javascript">
window.location.href = 'index.php'; //Will take you to Google.
</script>
<?php
?>