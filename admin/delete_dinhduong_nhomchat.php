<?php 
include('../lib/dbCon.php');
include('../lib/quantri.php');
$id = $_GET['id'];
mysql_query("DELETE FROM `07_giatridinhduong` WHERE 07_id_giatri = '$id'");
echo "<script> 
			window.location.href = 'dinhduong.php';		   				
					</script>";

?>