<html>
<head>
<title>lek&eacute;rdez&eacute;s</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"></head>

<body>
<?php
	include("kapcsolat.php");
?>
<style>
body {
    background-image: url(img/hatter.png);
}
</style>
<h2>Keres&eacute;s</h2>
<form method="post" action="keres.php">
	<table>
    	<tr>
        	<td>Eszköz megnevezése:</td>
            <td><input name="azonosito" type="text"></td>
            <td><button type="submit">Keresés</button></td>
        </tr>
        </table>
</form>
<form method="post" action="keres1.php">
        <table>
        <tr>
        	<td>Az eszközök helye:</td>
            <td>
				<select name="leltarkorzet">
				<?php
                $keres="SELECT * FROM leltarkorzet";
				$eredmeny=mysql_query($keres);
				while($sor=mysql_fetch_array($eredmeny,MYSQL_ASSOC))
				{
					echo "<option value=".$sor['ID'].">".$sor['hely']."</option>";
				}
  				?>
                </select>
            </td>
            <td><button type="submit"> Keresés</button></td>
        </tr>
    </table>
</form>
</body>
</html>