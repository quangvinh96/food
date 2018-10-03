<?php 
include('../lib/dbCon.php');
include('../lib/quantri.php');
$id = $_GET['id'];
mysql_query("DELETE FROM `06_vitamin` WHERE 06_id_vitamin = '$id'");
echo "<script> 
			window.location.href = 'vitamin.php';		   				
					</script>";

?>