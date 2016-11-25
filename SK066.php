<!DOCTYPE html>
<html>
<head>
  <title>AKN Bojonegoro</title>
</head>
<body>
<fieldset>
<legend>Keliling Lingkaran PWEB SK06-2</legend>

<form action="" method="post">
<table>
	<tr>   
 		<td>Masukkan Jari-jari</td>
		<td>:</td>
        <td><input type="text" name="jari" /></td>
	</tr>

	<tr>
   		 <td><input type="submit" value="hitung" name="hitung"/></td>
	</tr>
</table>
</form>

<?php
if (isset($_POST['hitung'])){
	$jari = $_POST['jari'];
	
	function luas ($jari) 
		{
	$keliling= 22 / 7 *($jari+$jari);
	echo"Jadi Keliling Lingkaran adalah = $keliling cm";
			}
			
	luas($jari);
	}
?>
</fieldset>
</body>
</html>
