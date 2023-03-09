<?php 

$adminName =  "Hakunamatata";

$data1= strtoupper(substr($adminName,0,6));
$data2= date("my");
		
		echo $data1.$data2;


?>