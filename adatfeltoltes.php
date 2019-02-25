<!doctype html>
<html>
<head>
<title>Leltár</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<style>
body {
    background-image: url(img/hatter.png);
}
</style>
<?php
	include("kapcsolat.php");
?>
<div id="container">
<div id="header">
<h1>Iskola leltár</h1>
</div><!--header v?ge-->
<div id="content">
		<form method="post" action="feltolt.php">
        	<table border="1">
            	<tr>
              		<td>Feladatellátási hely címe</td><br>
                	<td><select name="fhely">
                		<option value="016">9400 Sopron Handler Halász utca 9.-15.</option>
                    	<option value="017">9400 Sopron Hőközpont utca 2.</option>
                    	</select>
                	</td>
                </tr>
            	
                <tr>
                	<td>Leltárkörzet megnevezése</td>
                    <td><select name="leltarkorzet">
                    	<?php
                        $keres="SELECT * FROM leltarkorzet";
						$eredmeny=mysql_query($keres);
						while($sor=mysql_fetch_array($eredmeny,MYSQL_ASSOC))
						{
							echo "<option value=".$sor['ID'].">".$sor['hely']."</option>";
						}
  						?>
                    </select> 
                    <!--&nbsp&nbsp&nbsp&nbsp <a href="leltar.html"><img src="img/plus.jpg" width="30" height="30"></a>-->
                    </td>
               	<tr>
                	<td>Eszköz azonosító</td>
                    <td><input type="text" name="eazonosito" placeholder="pl: 1 111 111"></td>
                </tr>
                <tr>
                	<td>Leltári/egyéb azonosító szám</td>
                    <td><input type="text" name="leltarszam" placeholder="pl: IB0028426/9"></td>
                <tr>
                	<td>Főkönyvi számla száma</td>
                    <td><input type="text" name="szamlaszam" placeholder="pl: 13192"></td>
                </tr>
                <tr>
               		<td>Főkönyvi számla megnevezése</td>
                    <td><select name="fszmegnev" > 
                        <?php                
                        $keres="SELECT * FROM fokonyvmegnev";
						$eredmeny=mysql_query($keres);
						while($sor=mysql_fetch_array($eredmeny,MYSQL_ASSOC))
						{
							echo "<option value=".$sor['fszmegnev'].">".$sor['nev']."</option>";
						}
  						?>
                    
                   </select> 
                  <!-- &nbsp&nbsp&nbsp&nbsp <a href="fkonyvfeltolt.html"><img src="img/plus.jpg" width="30" height="30"></a></td>-->
                </tr>
                <tr>
                	<td>Megnevezés</td>
                    <td><input type="text" name="megnevezes" placeholder="írja be a tárgy nevét"></td>
                </tr>
            	<tr>
                	<td>Eszköz rövid leírása<br>
						(amennyiben indokolt)</td>
                    <td><input type="text" name="leiras"></td>
               	</tr>
                <tr>
                	<td>Nyilván tartásbavétel</td>
                    <td><input type="text" name="nyveteldatum" placeholder="ÉÉÉÉ.HH.NN."></td>
                </tr>
                <tr>
                	<td>Gyártási év</td>
                    <td><input type="number" min="1900" max="<?php echo date("Y"); ?>" name="gyartasev">
                <tr>
                	<td>Mennyiség</td>
                    <td><input type="number" min="1" max="1000000000"name="menyiseg" placeholder="db"></td>
                </tr>
                <tr>
                	<td>Könyv szerinti bruttó érték<br>
							(Ft)</td>
                    <td><input type="text" name="kbruttoertek"></td>
                </tr>
                <tr>
                	<td>Halmozott értékcsökkentés (Ft)</td>
                    <td><input type="text" name="hertekcsokkentes"></td>
                </tr>
                <tr>
                	<td>Könyv szerinti nettó érték(Ft)</td>
                	<td><input type="text" name="knettoertek"></td>
                </tr>
                <tr>
            		<td><button type="submit" name="kuld">Feltölt</button></td>
            	</tr>
            </table>
        </form>
</div><!--c