<?php 
include ("kapcsolat.php");
$nev=$_POST['feltolt'];
$keres="INSERT INTO fokonyvmegnev (nev) VALUES ('" .$nev."')";
echo "<script language'JavaScript'> alert('Sikeres felt�lt�s');</script>";
$eredmeny=mysql_query($keres);
?>
<script>
document.location.href="index.php?o=fkonyvfeltolt.html";
</script>