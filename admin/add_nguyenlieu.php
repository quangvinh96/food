<?php
	include('./header.php');
	include('../lib/dbCon.php');
	include('../lib/quantri.php');
?>
<!-- chỉ nhập số -->
 <script language='javascript'>
 function isNumberKey(evt)
 {
 var charCode = (evt.which) ? evt.which : event.keyCode
 if (charCode > 31 && (charCode < 48 || charCode > 57))
 return false;
 return true;
 }
 </script>

<section class="admin">
	<div class="container">
		<div class="tille_page">
			<h1>Thêm nguyên liệu thô</h1>
		</div>
		<div class="form_table">
			<form  method="post" >
				<?php 
				if(isset($_POST['btn_them'])){
					$tennguyenlieu = $_POST['tennguyenlieu'];
					$id_loai = $_POST['loai'];
					$kcal = $_POST['kcal'];
					$mau = $_POST['mau'];
					$vi = $_POST['vi'];
					$congdung = $_POST['congdung'];
					
					 mysql_query("INSERT INTO `02_nguyenlieutho`( `02_ten_nguyenlieu`, `02_id_loai`, `02_mau`, `02_vi`, `02_congdung`, `02_kcal_1gam`) VALUES ('$tennguyenlieu','$id_loai','$mau','$vi','$congdung','$kcal')");
					echo "<script>alert('Thêm thành công')</script>";
				}
				?>
			<table>
				<tr>
					<td>Tên nguyên liệu: &nbsp </td>
					<td><input type="text" name="tennguyenlieu" required></td>
				</tr>
				<tr>
					<td>Loại nguyên liệu: &nbsp </td>
					<td><select name="loai" >
						<?php $loai = loai();
						while ($row_loai = mysql_fetch_array($loai)) {	
						  ?>
						<option value="<?=$row_loai['03_id_loai'] ?>"><?=$row_loai['03_ten_loai'] ?></option>
						<?php } ?>
					</select></td>
				</tr>
				<tr>
					<td>Số Kcal trên 100 gam nguyên liệu: &nbsp </td>
					<td><input type="text" onKeyPress="return isNumberKey(event)" name="kcal" required></td>
				</tr>
				<tr>
					<td>Màu: &nbsp </td>
					<td><input type="text" name="mau" ></td>
				</tr>
				<tr>
					<td>Vị: &nbsp </td>
					<td><input type="text" name="vi" ></td>
				</tr>
				<tr>
					<td>Công dụng: &nbsp </td>
					<td><textarea name="congdung" required ></textarea>
					</td>
				</tr>


				<tr>
					<td colspan="2" align="center"><br><input type="submit" name="btn_them" class="btn btn_add" value="Thêm"></td>
				</tr>

			</table>
			</form>
		</div>
	</div>
</section>
