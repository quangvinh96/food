<?php
	include('./header.php');
	include('../lib/dbCon.php');
	include('../lib/quantri.php');
?>

<section class="admin">
	<div class="container">
		<div class="tille_page">
			<h1>Thêm vitamin cho nguyên liệu thực phẩm </h1>
		</div>
		<div class="form_table">
			<form  method="post" >
				<?php 
				if(isset($_POST['btn_them'])){
					$nguyenlieu = $_POST['nguyenlieu'];
					$vitamin = $_POST['vitamin'];

					$check_vitamin = check_vitamin($nguyenlieu,$vitamin);

					if($check_vitamin["0"] > 0){
						echo "<script>alert('Vitamin cho nguyên liệu này đã tồn tại, vui lòng chọn vitamin khác')</script>";
					}else{
						 mysql_query("INSERT INTO `07_giatridinhduong`( `07_id_nguyenlieu`, `07_id_nhomchat`, `07_id_vitamin`) VALUES ('$nguyenlieu',NULL,'$vitamin')");
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
					<td><select name="vitamin" required >
						<?php $vitamin = vitamin();
						while ($row_vitamin = mysql_fetch_array($vitamin)) {	
						 ?>
						<option value="<?=$row_vitamin['06_id_vitamin']?>"><?=$row_vitamin['06_ten_vitamin']?></option>
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