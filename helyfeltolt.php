<?php 
include ("kapcsolat.php");
$hely=$_POST['feltolt'];
$keres="INSERT INTO leltarkorzet (hely) VALUES ('" .$hely."')";
echo "<script language'JavaScript'> alert('Sikeres feltöltés');</script>";
$eredmeny=mysql_query($keres);
?>
<script>
document.location.href="index.php?o=leltar.html";
</script>