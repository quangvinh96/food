<?php
	include('./header.php');
	include('../lib/dbCon.php');
	include('../lib/quantri.php');
?>

<section class="admin">
	<div class="container">
		<div class="tille_page">
			<h1>Thêm nhóm chất cho nguyên liệu thực phẩm </h1>
		</div>
		<div class="form_table">
			<form  method="post" >
				<?php 
				if(isset($_POST['btn_them'])){
					$nguyenlieu = $_POST['nguyenlieu'];
					$nhomchat = $_POST['nhomchat'];

					$check_nhomchat = check_nhomchat($nguyenlieu,$nhomchat);

					if($check_nhomchat["0"] > 0){
						echo "<script>alert('Nhóm chất cho nguyên liệu này đã tồn tại, vui lòng chọn nhóm chất khác')</script>";
					}else{
						 mysql_query("INSERT INTO `07_giatridinhduong`( `07_id_nguyenlieu`, `07_id_nhomchat`, `07_id_vitamin`) VALUES ('$nguyenlieu','$nhomchat',NULL)");
					 echo "<script>alert('Thêm thành công')</script>";

					}

					
					
				}
				?>
			<table>
				<tr>
					<td>Tên nguyên liệu: &nbsp </td>
					<td><select name="nguyenlieu" required >
						<?php $nguyenlieu = nguyenlieu();
						while ($row_nguyenlieu = mysql_fetch_array($nguyenlieu)) {	
						 ?>
						<option value="<?=$row_nguyenlieu['02_id_nguyenlieu']?>"><?=$row_nguyenlieu['02_ten_nguyenlieu']?></option>
						<?php } ?>
						
					</select></td>
				</tr>
				<tr>
					<td>Nhóm chất: &nbsp </td>
					<td><select name="nhomchat" required >
						<?php $nhomchat = nhomchat();
						while ($row_nhomchat = mysql_fetch_array($nhomchat)) {	
						 ?>
						<option value="<?=$row_nhomchat['05_id_nhomchat']?>"><?=$row_nhomchat['05_ten_nhomchat']?></option>
						<?php } ?>
						
					</select></td>
				</tr>

				<tr>
					<td colspan="2" align="center"><br><input type="submit" name="btn_them" class="btn btn_add" value="Thêm"></td>
				</tr>

			</table>
			</form>
		</div>
	</div>
</section>