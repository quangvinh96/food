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
			<h1>Nhóm chất</h1>
			<a href="./add_nhomchat.php" class="btn_add"><input type="button" value="Thêm"></a>
		</div>
		<br>
		<div class="list_table">
			<table>
		  <tr>
		    <th>STT</th>
		    <th>Tên nhóm chất</th>
		    <th>Sửa</th>
		    <th>Xóa</th>
		  </tr>
		  <?php $ds_nhomchat = nhomchat();
		  		$i=1;
		  		while ($row_ds_nhomchat = mysql_fetch_array($ds_nhomchat)) {
		  					
		   ?>
		  <tr>
		    <td><?php echo $i++;?></td>
		    <td><?=$row_ds_nhomchat['05_ten_nhomchat'] ?></td>
		    <td><a href="edit_nhomchat.php?id=<?=$row_ds_nhomchat['05_id_nhomchat'] ?>">Sửa</a></td>
		    <td><a onclick="return confirm('bạn có chắc muốn xóa ?');" href="delete_nhomchat.php?id=<?=$row_ds_nhomchat['05_id_nhomchat'] ?>">Xóa</a></td>
		  </tr>
		 <?php } ?>
		 
		</table>
		</div>
	</div>
</section>