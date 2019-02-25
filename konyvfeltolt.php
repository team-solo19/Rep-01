<?php 
include ("kapcsolat.php");
$nev=$_POST['feltolt'];
$keres="INSERT INTO fokonyvmegnev (nev) VALUES ('" .$nev."')";
echo "<script language'JavaScript'> alert('Sikeres feltöltés');</script>";
$eredmeny=mysql_query($keres);
?>
<script>
document.location.href="index.php?o=fkonyvfeltolt.html";
</script>