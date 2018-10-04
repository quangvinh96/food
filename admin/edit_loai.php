<?php
	include('./header.php');
	include('../lib/dbCon.php');
	include('../lib/quantri.php');
	$id = $_GET['id'];
	$loai = loai_id($id);
?>

<section class="admin">
	<div class="container">
		<div class="tille_page">
			<h1>Sửa loại thực phẩm</h1>
		</div>
		<div class="form_table">
			<form  method="post" >
				<?php 
				if(isset($_POST['btn_them'])){
				 $tenloai = $_POST['tenloai'];
					mysql_query("UPDATE `03_loai` SET 03_ten_loai = '$tenloai' where 03_id_loai = '$id'");
						echo "<script> alert ('Cập nhật thành công');
							window.location.href = 'loai.php';
					</script>";
				}
				?>
			<table>
				<tr>
					<td>Tên loại thực phẩm: &nbsp </td>
					<td><input type="text" name="tenloai" required value="<?=$loai['03_ten_loai'] ?>"></td>
				</tr>

				<tr>
					<td colspan="2" align="center"><br><input type="submit" name="btn_them" class="btn btn_add" value="Sửa"></td>
				</tr>

			</table>
			</form>
		</div>
	</div>
</section>