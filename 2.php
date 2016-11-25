<!DOCTYPE html>
<html>
<head>
	<title>Studi kasus 4_2 </title>
	<style>
table {
    width:45%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 th	{
    text-align:center;
}

</style>

</head>
<body>
<table id="t01">
  <tr>
    <th>No</th>
    <th>Kode Barang</th>		
    <th>Nama Barang</th>
    <th>harga</th>
  </tr>
  
	<?php
    define("mb25", "MB25", true);
    define("pr80", "PR80", true);
    define("m717", "M717", true);
    define("mm34", "MM34", true);
    define("k987", "K987", true);
    $harga1="250";
    $harga2="750";
    $harga3="30";
    $harga4="150";
    $harga5="35";

    $kodebarang=M717;

    echo "
    <tr>
    <td style=text-align:center;>1</td>
    <td>".Mb25."</td>   
    <td>Motherboard</td>
    <td>".$harga1."</td>
  </tr>
  <tr>
    <td style=text-align:center;>2</td>
    <td>".pr80."</td>   
    <td>Printer</td>
    <td>".$harga2."</td>
  </tr>
  <tr>
    <td style=text-align:center;>3</td>
    <td>".M717."</td>   
    <td>Mouse</td>
    <td>".$harga3."</td>
  </tr>
  <tr>
    <td style=text-align:center;>4</td>
    <td>".MM34."</td>   
    <td>Memory</td>
    <td>".$harga4."</td>
  </tr>
  <tr>
    <td style=text-align:center;>5</td>
    <td>".K987."</td>   
    <td>Keyboard</td>
    <td>".$harga5."</td>
  </tr>
</table>";
    
		echo "<br>";
    if ($kodebarang==Mb25){
        echo "kode barang <b>".Mb25."</b> dengan harga <b>".$harga1.".000</b>";
    }
    else if ($kodebarang==pr80){
        echo "kode barang <b>".pr80."</b> dengan harga <b>".$harga2.".000</b>";
    }
    else if ($kodebarang==M717){
        echo "kode barang <b>".M717."</b> dengan harga <b>".$harga3.".000</b>";
    }
    else if ($kodebarang==MM34){
        echo "kode barang <b>".MM34."</b> dengan harga <b>".$harga4.".000</b>";
    }
    else if ($kodebarang==K987){
        echo "kode barang <b>".K987."</b> dengan harga <b>".$harga5.".000</b>";
    }
    else
      echo "kode barang tidak sesuai";
	?>

</body>
</html>