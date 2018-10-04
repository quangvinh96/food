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
			<h1>Giá trị dinh dưỡng</h1>
			
			
		</div>
		<br>
		<div class="list_table">
		<h3>Nhóm chất</h3>
		<a href="./add_dinhduong_nhomchat.php" class="btn_add"><input style ="color:#63b5ea" type="button" value="Thêm"></a>
		<br/><br/>
			<table>
		  <tr>
		    <th>STT</th>
		    <th>Tên nguyên liệu</th>
		    <th>Bao gồm các nhóm chất</th>
		    <th>Xóa</th>
		  </tr>
		  <?php $ds_nguyenlieu = nguyenlieu_nhomchat();
		  			
		  		$i=1;
		  		while ($row_ds_nguyenlieu = mysql_fetch_array($ds_nguyenlieu)) {
		  					
		   ?>
		  <tr >
		    <td><?php echo $i++;?></td>
		    <td><?=$row_ds_nguyenlieu['02_ten_nguyenlieu'] ?></td>
		    <td><?=$row_ds_nguyenlieu['05_ten_nhomchat'] ?></td>
		    <td style="text-align: left;"><a onclick="return confirm('bạn có chắc muốn xóa ?');" href="delete_dinhduong_nhomchat.php?id=<?=$row_ds_nguyenlieu['07_id_giatri'] ?>">Xóa</a></td>
		  </tr>
		 <?php } ?>
		 
		</table>
		</div>

		<div style="border-bottom: 1px solid gainsboro;padding-top: 30px; "></div>
		<div class="list_table">
		<h3>Vitamin</h3>
		<a href="./add_dinhduong_vitamin.php" class="btn_add"><input style ="color:#63b5ea" type="button" value="Thêm"></a>
		<br/><br/>
			<table>
		  <tr>
		    <th>STT</th>
		    <th>Tên nguyên liệu</th>
		    <th>Bao gồm các vitamin</th>
		    <th>Xóa</th>
		  </tr>
		  <?php $ds_nguyenlieu_vt = nguyenlieu_vitamin();
		  			
		  		$i=1;
		  		while ($row_ds_nguyenlieu_vt = mysql_fetch_array($ds_nguyenlieu_vt)) {
		  					
		   ?>
		  <tr>
		    <td><?php echo $i++;?></td>
		    <td><?=$row_ds_nguyenlieu_vt['02_ten_nguyenlieu'] ?></td>
		    <td><?=$row_ds_nguyenlieu_vt['06_ten_vitamin'] ?></td>
		    <td style="text-align: left;"><a onclick="return confirm('bạn có chắc muốn xóa ?');" href="delete_dinhduong_nhomchat.php?id=<?=$row_ds_nguyenlieu_vt['07_id_giatri'] ?>">Xóa</a></td>
		  </tr>
		 <?php } ?>
		 
		</table>
		</div>

		<div style="padding-bottom: 100px" ></div>
			
		
	</div>
</section>