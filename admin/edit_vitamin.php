<?php
	include('./header.php');
	include('../lib/dbCon.php');
	include('../lib/quantri.php');
	$id = $_GET['id'];
	$loai = vitamin_id($id);
?>

<section class="admin">
	<div class="container">
		<div class="tille_page">
			<h1>Sửa vitamin</h1>
		</div>
		<div class="form_table">
			<form  method="post" >
				<?php 
				if(isset($_POST['btn_them'])){
				 $tenloai = $_POST['tenloai'];
					mysql_query("UPDATE `06_vitamin` SET 06_ten_vitamin = '$tenloai' where 06_id_vitamin = '$id'");
						echo "<script> alert ('Cập nhật thành công');
							window.location.href = 'vitamin.php';
					</script>";
				}
				?>
			<table>
				<tr>
					<td>Tên vitamin: &nbsp </td>
					<td><input type="text" name="tenloai" required value="<?=$loai['06_ten_vitamin'] ?>"></td>
				</tr>

				<tr>
					<td colspan="2" align="center"><br><input type="submit" name="btn_them" class="btn btn_add" value="Sửa"></td>
				</tr>

			</table>
			</form>
		</div>
	</div>
</section>