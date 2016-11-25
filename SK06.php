<!DOCTYPE html>
<html>
<head>
  <title>AKN Bojonegoro</title>
</head>
<body>
<fieldset>
<legend>Luas Lingkaran PWEB SK06-1</legend>

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
	$luas = $jari * $jari * 22 / 7  ;
	echo"Jadi Luas Lingkaran adalah = $luas cm";
			}
		
			
	luas($jari);
	}
?>
</fieldset>
</body>
</html>
