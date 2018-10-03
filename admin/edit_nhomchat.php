<?php
	include('./header.php');
	include('../lib/dbCon.php');
	include('../lib/quantri.php');
	$id = $_GET['id'];
	$loai = nhomchat_id($id);
?>

<section class="admin">
	<div class="container">
		<div class="tille_page">
			<h1>Sửa nhóm chất</h1>
		</div>
		<div class="form_table">
			<form  method="post" >
				<?php 
				if(isset($_POST['btn_them'])){
				 $tenloai = $_POST['tenloai'];
					mysql_query("UPDATE `05_nhomchat` SET 05_ten_nhomchat = '$tenloai' where 05_id_nhomchat = '$id'");
						echo "<script> alert ('Cập nhật thành công');
							window.location.href = 'nhomchat.php';
					</script>";
				}
				?>
			<table>
				<tr>
					<td>Tên nhóm chất: &nbsp </td>
					<td><input type="text" name="tenloai" required value="<?=$loai['05_ten_nhomchat'] ?>"></td>
				</tr>

				<tr>
					<td colspan="2" align="center"><br><input type="submit" name="btn_them" class="btn btn_add" value="Sửa"></td>
				</tr>

			</table>
			</form>
		</div>
	</div>
</section>