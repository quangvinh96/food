<?php
	include('./header.php');
	include('../lib/dbCon.php');
	include('../lib/quantri.php');
?>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

</style>

<?php 
$id = $_GET['id'];
$monan = monan_id($id);
?>
<section class="admin">
	<div class="container">
		
		<div><center><img style="max-width: 500px; max-height: 300px" src="../imgs/uploads/<?=$monan['01_hinh'] ?>" ></center><div>
		<div><center><h3><?=$monan['01_ten_monan'] ?></h3></center></div>
		<div><a href="add_nguyenlieu_monan.php?id=<?=$id?>"><input type="button" value="Sửa"></a></div>
		<br><br>

		<div>Nguyên liệu:</div>  
		<?php 
		$nguyenlieu_monan = nguyenlieu_monan($id);
		$tong = array();
		while ($row_NL_MN = mysql_fetch_array($nguyenlieu_monan)) {

		array_push($tong, $row_NL_MN['04_khoiluong']*$row_NL_MN['02_kcal_1gam']);
		
		 ?>
		 <div><?php echo "+ ".$row_NL_MN['02_ten_nguyenlieu'].": ".$row_NL_MN['04_khoiluong']."g, "."Kcal cung cấp: ".($row_NL_MN['04_khoiluong']*$row_NL_MN['02_kcal_1gam']/100)." kcal." ?></div>

		<?php } ?>

		<?php echo "Tổng Kcal cung cấp: ".array_sum($tong)."Kcal"; ?>
		<!--////////////////////////////////////  -->
		<br><br>
		<div>Giá trị dinh dưỡng:</div>
		<div>- Nhóm chất</div>
		<?php
		$nhomchat_monan = nhomchat_monan($id);
		while ($row_NC_MN = mysql_fetch_array($nhomchat_monan)) {
		 ?>
		<div><?php echo "+ ". $row_NC_MN['05_ten_nhomchat'] ?></div>
		<?php } ?>


		<br>
		<div>- Vitamin</div>
		<?php
		$vitamin_monan = vitamin_monan($id);
		while ($row_VT_MN = mysql_fetch_array($vitamin_monan)) {
		 ?>
		<div><?php echo "+ ". $row_VT_MN['06_ten_vitamin'] ?></div>
		<?php } ?>
		
	</div>
</section>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 
<script>
$("img").error(function(){
    $(this).attr("src","../imgs/chuaco.png")
	});
</script> 