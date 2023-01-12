<?php
	$sql1="SELECT sum(ancho) as total1 FROM `inventario` A  WHERE (A.material = '$vinilo') ";
    $result1=mysqli_query($cn,$sql1);
	$data1=mysqli_fetch_assoc($result1); 
?>