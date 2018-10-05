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
			<h1>Nguyên liệu thô</h1>
			<a href="./add_nguyenlieu.php" class="btn_add"><input type="button" value="Thêm"></a>
		</div>
		<br>
		<div class="list_table">
			<table>
		  <tr>
		    <th>STT</th>
		    <th>Tên nguyên liệu</th>
		    <th>Loại</th>
		    <th>Màu</th>
		    <th>Vị</th>
		    <th>Số kcal trên 1 gam nguyên liệu</th>
		    <th>Công dụng</th>
		    <th>Sửa</th>
		    <th>Xóa</th>
		  </tr>
		  <?php $ds_nguyenlieu = nguyenlieu();
		  		$i=1;
		  		while ($row_ds_nguyenlieu = mysql_fetch_array($ds_nguyenlieu)) {
		  					
		   ?>
		  <tr>
		    <td><?php echo $i++;?></td>
		    <td><?=$row_ds_nguyenlieu['02_ten_nguyenlieu'] ?></td>
		    <td><?=$row_ds_nguyenlieu['03_ten_loai'] ?></td>
		    <td><?=$row_ds_nguyenlieu['02_mau'] ?></td>
		    <td><?=$row_ds_nguyenlieu['02_vi'] ?></td>
		    <td><?=$row_ds_nguyenlieu['02_kcal_1gam'] ?></td>
		    <td><?=$row_ds_nguyenlieu['02_congdung'] ?></td>

		    <td><a href="edit_nguyenlieu.php?id=<?=$row_ds_nguyenlieu['02_id_nguyenlieu'] ?>">Sửa</a></td>
		    <td style="text-align: left;"><a onclick="return confirm('bạn có chắc muốn xóa ?');" href="delete_nguyenlieu.php?id=<?=$row_ds_nguyenlieu['02_id_nguyenlieu'] ?>">Xóa</a></td>
		  </tr>
		 <?php } ?>
		 
		</table>
		</div>
	</div>
</section>