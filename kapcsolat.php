<?php
$kapcsolat = mysql_connect("127.0.0.1", "sulileltar", "PF15kap");
if (!$kapcsolat) die("Nem sikerült kapcsolódni az adatbázishoz!"); 
mysql_select_db("sulileltar", $kapcsolat) or die("Nem sikerült kiválasztani az adatbázist!"); 
?>