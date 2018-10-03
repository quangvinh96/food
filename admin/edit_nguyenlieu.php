<?php
	include('./header.php');
	include('../lib/dbCon.php');
	include('../lib/quantri.php');
	$id = $_GET['id'];
	$loai = loai_id($id);
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
			<h1>Sửa nguyên liệu thô</h1>
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
					
					 mysql_query("UPDATE `02_nguyenlieutho` SET `02_ten_nguyenlieu`='$tennguyenlieu',`02_id_loai`='$id_loai',`02_mau`='$mau',`02_vi`='$vi',`02_congdung`='$congdung',`02_kcal_1gam`='$kcal' WHERE 02_id_nguyenlieu = '$id'");
					echo "<script>alert('Cập nhật thành công');
								window.location.href = 'nguyenlieu.php';
								</script>";
				}
				?>
			<table>
				<?php $nguyelieu = nguyenlieu_id($id) ?>
				<tr>
					<td>Tên nguyên liệu: &nbsp </td>
					<td><input type="text" name="tennguyenlieu" required value="<?=$nguyelieu['02_ten_nguyenlieu']?>"></td>
				</tr>
				<tr>
					<td>Loại nguyên liệu: &nbsp </td>
					<td><select name="loai" >
						<option value="<?=$nguyelieu['03_id_loai'] ?>"><?=$nguyelieu['03_ten_loai'] ?></option>
						<?php 
						$loaiht = $nguyelieu['02_id_loai'];
						$loai = loaikhac($loaiht);
						while ($row_loai = mysql_fetch_array($loai)) {	
						  ?>
						<option value="<?=$row_loai['03_id_loai'] ?>"><?=$row_loai['03_ten_loai'] ?></option>
						<?php } ?>
					</select></td>
				</tr>
				<tr>
					<td>Số Kcal trên 1 gam nguyên liệu: &nbsp </td>
					<td><input type="text" onKeyPress="return isNumberKey(event)" name="kcal" required value="<?=$nguyelieu['02_kcal_1gam'] ?>"></td>
				</tr>
				<tr>
					<td>Màu: &nbsp </td>
					<td><input type="text" name="mau" value="<?=$nguyelieu['02_mau'] ?>"></td>
				</tr>
				<tr>
					<td>Vị: &nbsp </td>
					<td><input type="text" name="vi" value="<?=$nguyelieu['02_vi'] ?>" ></td>
				</tr>
				<tr>
					<td>Công dụng: &nbsp </td>
					<td><textarea name="congdung" required  ><?=$nguyelieu['02_congdung'] ?></textarea>
					</td>
				</tr>


				<tr>
					<td colspan="2" align="center"><br><input type="submit" name="btn_them" class="btn btn_add" value="Sửa"></td>
				</tr>

			</table>
			</form>
		</div>
	</div>
</section>
