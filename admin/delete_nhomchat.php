<?php 
include('../lib/dbCon.php');
include('../lib/quantri.php');
$id = $_GET['id'];
mysql_query("DELETE FROM `05_nhomchat` WHERE 05_id_nhomchat = '$id'");
echo "<script> 
			window.location.href = 'nhomchat.php';		   				
					</script>";

?>