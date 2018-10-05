<?php 
include('../lib/dbCon.php');
include('../lib/quantri.php');
$id = $_GET['id'];
$id_monan = $_GET['id_monan'];
mysql_query("DELETE FROM `04_khoiluong` WHERE 04_id_khoiluong = '$id'");
?>

<script type='text/javascript'>
    var id = '<?php echo $id_monan; ?>';
    window.location.href = 'add_nguyenlieu_monan.php?id='+id;
</script>




