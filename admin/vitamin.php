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
			<h1>Vitamin</h1>
			<a href="./add_vitamin.php" class="btn_add"><input type="button" value="Thêm"></a>
		</div>
		<br>
		<div class="list_table">
			<table>
		  <tr>
		    <th>STT</th>
		    <th>Tên vitamin</th>
		    <th>Sửa</th>
		    <th>Xóa</th>
		  </tr>
		  <?php $ds_vitamin = vitamin();
		  		$i=1;
		  		while ($row_ds_vitamin = mysql_fetch_array($ds_vitamin)) {
		  					
		   ?>
		  <tr>
		    <td><?php echo $i++;?></td>
		    <td><?=$row_ds_vitamin['06_ten_vitamin'] ?></td>
		    <td><a href="edit_vitamin.php?id=<?=$row_ds_vitamin['06_id_vitamin'] ?>">Sửa</a></td>
		    <td style="text-align: left;"><a onclick="return confirm('bạn có chắc muốn xóa ?');" href="delete_vitamin.php?id=<?=$row_ds_vitamin['06_id_vitamin'] ?>">Xóa</a></td>
		  </tr>
		 <?php } ?>
		 
		</table>
		</div>
	</div>
</section>