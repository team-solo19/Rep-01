<?php
include("kapcsolat.php");
$keres= "INSERT INTO leltar (fhely, leltarkorzet, eazonostio, leltarszam, szamlaszam, fszmegnev, megnevezes, leiras, nyveteldatum, gyartasev, menyiseg, kbruttoertek, hertekcsokkentes, knettoertek) VALUES ('".$_POST['fhely']."'".","."'".$_POST['leltarkorzet']."'".",".$_POST['eazonosito'].","."'".$_POST['leltarszam']."'".",".$_POST['szamlaszam'].",".$_POST['fszmegnev'].","."'".$_POST['megnevezes']."'".","."'".$_POST['leiras']."'".","."'".$_POST['nyveteldatum']."'".",".$_POST['gyartasev'].",".$_POST['menyiseg'].",".$_POST['kbruttoertek'].",".$_POST['hertekcsokkentes'].",".$_POST['knettoertek'].")";
echo "<script language'JavaScript'> alert('Sikeres feltöltés');</script>";
//echo $keres;
$eredmeny=mysql_query($keres);
?>
<script>
document.location.href="index.php?o=adatfeltoltes.php";
</script>