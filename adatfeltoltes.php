<!doctype html>
<html>
<head>
<title>Lelt�r</title>
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
<h1>Iskola lelt�r</h1>
</div><!--header v?ge-->
<div id="content">
		<form method="post" action="feltolt.php">
        	<table border="1">
            	<tr>
              		<td>Feladatell�t�si hely c�me</td><br>
                	<td><select name="fhely">
                		<option value="016">9400 Sopron Handler Hal�sz utca 9.-15.</option>
                    	<option value="017">9400 Sopron H�k�zpont utca 2.</option>
                    	</select>
                	</td>
                </tr>
            	
                <tr>
                	<td>Lelt�rk�rzet megnevez�se</td>
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
                	<td>Eszk�z azonos�t�</td>
                    <td><input type="text" name="eazonosito" placeholder="pl: 1 111 111"></td>
                </tr>
                <tr>
                	<td>Lelt�ri/egy�b azonos�t� sz�m</td>
                    <td><input type="text" name="leltarszam" placeholder="pl: IB0028426/9"></td>
                <tr>
                	<td>F�k�nyvi sz�mla sz�ma</td>
                    <td><input type="text" name="szamlaszam" placeholder="pl: 13192"></td>
                </tr>
                <tr>
               		<td>F�k�nyvi sz�mla megnevez�se</td>
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
                	<td>Megnevez�s</td>
                    <td><input type="text" name="megnevezes" placeholder="�rja be a t�rgy nev�t"></td>
                </tr>
            	<tr>
                	<td>Eszk�z r�vid le�r�sa<br>
						(amennyiben indokolt)</td>
                    <td><input type="text" name="leiras"></td>
               	</tr>
                <tr>
                	<td>Nyilv�n tart�sbav�tel</td>
                    <td><input type="text" name="nyveteldatum" placeholder="����.HH.NN."></td>
                </tr>
                <tr>
                	<td>Gy�rt�si �v</td>
                    <td><input type="number" min="1900" max="<?php echo date("Y"); ?>" name="gyartasev">
                <tr>
                	<td>Mennyis�g</td>
                    <td><input type="number" min="1" max="1000000000"name="menyiseg" placeholder="db"></td>
                </tr>
                <tr>
                	<td>K�nyv szerinti brutt� �rt�k<br>
							(Ft)</td>
                    <td><input type="text" name="kbruttoertek"></td>
                </tr>
                <tr>
                	<td>Halmozott �rt�kcs�kkent�s (Ft)</td>
                    <td><input type="text" name="hertekcsokkentes"></td>
                </tr>
                <tr>
                	<td>K�nyv szerinti nett� �rt�k(Ft)</td>
                	<td><input type="text" name="knettoertek"></td>
                </tr>
                <tr>
            		<td><button type="submit" name="kuld">Felt�lt</button></td>
            	</tr>
            </table>
        </form>
</div><!--c