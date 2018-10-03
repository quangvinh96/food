<?php 
include('../lib/dbCon.php');
include('../lib/quantri.php');
$id = $_GET['id'];
mysql_query("DELETE FROM `02_nguyenlieutho` WHERE 02_id_nguyenlieu = '$id'");
echo "<script> 
			window.location.href = 'nguyenlieu.php';		   				
					</script>";

?>