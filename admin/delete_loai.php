<?php 
include('../lib/dbCon.php');
include('../lib/quantri.php');
$id = $_GET['id'];
mysql_query("DELETE FROM `03_loai` WHERE 03_id_loai = '$id'");
echo "<script> 
			window.location.href = 'loai.php';		   				
					</script>";

?>