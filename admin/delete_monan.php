<?php 
include('../lib/dbCon.php');
include('../lib/quantri.php');
$id = $_GET['id'];
$namehinh = name_hinh($id);
$tenhinhcu =  "../imgs/uploads/".$namehinh['01_hinh'];

unlink($tenhinhcu);

mysql_query("DELETE FROM `01_monan` WHERE 01_id_monan = '$id'");
mysql_query("DELETE FROM `04_khoiluong` WHERE 04_id_monan = '$id'");
?>

<script type='text/javascript'>
    window.location.href = 'index.php';
</script>




