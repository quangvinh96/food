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
			<h1>Loại thực phẩm</h1>
			<a href="./add_loai.php" class="btn_add"><input type="button" value="Thêm"></a>
		</div>
		<br>
		<div class="list_table">
			<table>
		  <tr>
		    <th>STT</th>
		    <th>Tên loại</th>
		    <th>Sửa</th>
		    <th>Xóa</th>
		  </tr>
		  <?php $ds_loai = loai();
		  		$i=1;
		  		while ($row_ds_loai = mysql_fetch_array($ds_loai)) {
		  					
		   ?>
		  <tr>
		    <td><?php echo $i++;?></td>
		    <td><?=$row_ds_loai['03_ten_loai'] ?></td>
		    <td><a href="edit_loai.php?id=<?=$row_ds_loai['03_id_loai'] ?>">Sửa</a></td>
		    <td style="text-align: left;"><a onclick="return confirm('bạn có chắc muốn xóa ?');" href="delete_loai.php?id=<?=$row_ds_loai['03_id_loai'] ?>">Xóa</a></td>
		  </tr>
		 <?php } ?>
		 
		</table>
		</div>
	</div>
</section>