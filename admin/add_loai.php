<?php
	include('./header.php');
	include('../lib/dbCon.php');
?>

<section class="admin">
	<div class="container">
		<div class="tille_page">
			<h1>Thêm loại thực phẩm</h1>
		</div>
		<div class="form_table">
			<form  method="post" >
				<?php 
				if(isset($_POST['btn_them'])){
					$tenloai = $_POST['tenloai'];
					mysql_query("INSERT INTO `03_loai`( `03_ten_loai`) VALUES ('$tenloai')");
					echo "<script>alert('Thêm thành công')</script>";
				}
				?>
			<table>
				<tr>
					<td>Tên loại: &nbsp </td>
					<td><input type="text" name="tenloai" required ></td>
				</tr>

				<tr>
					<td colspan="2" align="center"><br><input type="submit" name="btn_them" class="btn btn_add" value="Thêm"></td>
				</tr>

			</table>
			</form>
		</div>
	</div>
</section>