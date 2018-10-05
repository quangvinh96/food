
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
<section class="admin">
	<div class="container">
		<div class="tille_page">
			<h1>Món ăn</h1>
			<a href="./add_monan.php" class="btn_add"><input type="button" value="Thêm"></a>
		</div>
		<br>
		<div class="list_table">
			<table>
		  <tr>
		    <th>STT</th>
		    <th>Hình</th>
		    <th>Tên</th>
		    <th>Chi tiết</th>
		    <th>Xóa</th>
		  </tr>
		  <?php $ds_monan = monan();
		  		$i=1;
		  		while ($row_ds_monan = mysql_fetch_array($ds_monan)) {
		  					
		   ?>
		  <tr>
		    <td><?php echo $i++;?></td>
		    <td><img style ="max-width: 150px;max-height: 100px;" src="../imgs/uploads/<?=$row_ds_monan['01_hinh'] ?>" /></td>
		    <td><?=$row_ds_monan['01_ten_monan'] ?></td>
		    <td><a href="monan.php?id=<?=$row_ds_monan['01_id_monan'] ?>">Xem</a></td>
		    <td style="text-align: left;"><a onclick="return confirm('bạn có chắc muốn xóa ?');" href="delete_monan.php?id=<?=$row_ds_monan['01_id_monan']?>">Xóa</a></td>
		    
		  </tr>
		 <?php } ?>
		 
		</table>
		</div>
	</div>
</section>
<!-- kt lỗi ảnh -->

 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 
<script>
$("img").error(function(){
    $(this).attr("src","../imgs/chuaco.png")
	});
</script> 