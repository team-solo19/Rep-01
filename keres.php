<style>
body {
    background-image: url(img/hatter.png);
}
</style>
<?php
include("kapcsolat.php");
$keres="select * from leltar";
$eredmeny=mysql_query($keres);
?>
<table border="1">
		<tr>
        	<th>
            	Feladatell&aacute;t&aacute;si hely c&iacute;me
            </th>
            <th>
            	Lelt&aacute;rk&ouml;rzet megnevez&eacute;se
            </th>
            <th>
            	Eszk&ouml;z azonos&iacute;t&oacute;
            </th>
            <th>
            	Lelt&aacute;ri/egy&eacute;b azonos&iacute;t&oacute; sz&aacute;m
            </th>
            <th>
            	Fõk&ouml;nyvi sz&aacute;mla sz&aacute;ma
            </th>
            <th>
            	Fõk&ouml;nyvi sz&aacute;mla megnevez&eacute;se
            </th>
            <th>
            	Megnevez&eacute;s
            </th>
            <th>
            	Eszk&ouml;z r&ouml;vid le&iacute;r&aacute;sa
            </th>
            <th>
            	Nyilv&aacute;ntart&aacute;sba v&eacute;tel d&aacute;tuma
            </th>
            <th>
            	Gy&aacute;rt&aacute;s &eacute;ve
            </th>
            <th>
            	Menyis&eacute;g
            </th>
            <th>
            	K&ouml;nyv szerinti brutt&oacute; &eacute;rt&eacute;k
            </th>
            <th>
            	Halmozott &eacute;rt&eacute;kcs&ouml;kkent&eacute;s
            </th>
            <th>
            	K&ouml;nyv szerinti nett&oacute; &eacute;rt&eacute;k
            </th>
        </tr>
<?php
while($sor=mysql_fetch_array($eredmeny,MYSQL_ASSOC))
	{
		if (stripos($sor['megnevezes'],$_POST["azonosito"])>-1)
			{
				?>
			<tr>
			<td>
            <?php
				$keres1="SELECT * FROM telep WHERE fhely='".$sor['fhely']."'";
				$eredmeny1=mysql_query($keres1);
				//echo $keres1
				$sor1=mysql_fetch_array($eredmeny1,MYSQL_ASSOC);
				echo $sor1['cim'];
			?>
			</td>
            <td>
            <?php
				$keres2="SELECT * FROM leltarkorzet WHERE id='".$sor['leltarkorzet']."'";
				$eredmeny2=mysql_query($keres2);
				$sor2=mysql_fetch_array($eredmeny2,MYSQL_ASSOC);
				echo $sor2['hely'];
			?>
            </td>
			<td>
            <?php
				echo $sor['eazonostio'];
			?>
			</td>
			<td>
			<?php
				echo $sor['leltarszam'];
			?>
            </td>
			<td>
			<?php
				echo $sor['szamlaszam'];
			?>
            </td>
			<td>
			<?php
				$keres3="SELECT * FROM fokonyvmegnev WHERE fszmegnev='".$sor['fszmegnev']."'";
				$eredmeny3=mysql_query($keres3);
				$sor3=mysql_fetch_array($eredmeny3,MYSQL_ASSOC);
				echo $sor3['nev'];
			?>
            </td>
            <th>
            <?php
				echo $sor['megnevezes'];
			?>
            </th>
            <td>
            <?php
				echo $sor['leiras'];
			?>
            </td>
            <td>
            <?php
				echo $sor['nyveteldatum'];
			?>
            </td>
            <td>
            <?php 
				echo $sor['gyartasev'];
			?>
            </td>
            <td>
            <?php
				echo $sor['menyiseg'];
			?>
            </td>
            <td>
            <?php
				echo $sor['kbruttoertek'];
			?>
            </td>
            <td>
            <?php
				echo $sor['hertekcsokkentes'];
			?>
            </td>
            <td>
            <?php
				echo $sor['knettoertek'];
			?>
            </td>
         </tr>
         <?php
			}
	}
?>