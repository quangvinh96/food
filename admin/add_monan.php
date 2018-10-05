<?php
	include('./header.php');
	include('../lib/dbCon.php');
	include('../lib/quantri.php');
?>

<section class="admin">
	<div class="container">
		<div class="tille_page">
			<h1>Thêm món ăn</h1>
		</div>
		<div class="form_table">
			<?php
if(isset($_POST["Submit"])) 
{
if($_FILES["file"]["name"]!=NULL)
{

if($_FILES["file"]["type"]=="image/jpeg"
||$_FILES["file"]["type"]=="image/png"
||$_FILES["file"]["type"]=="image/gif"
)
{
if($_FILES["file"]["size"]>1048576)
{
echo "file quá lớn";
}

elseif (file_exists("" . $_FILES["file"]["name"])) 
{
echo $_FILES["file"]["name"]." file đã tồn tại. ";
}

else{
$name_monan = $_POST['name_monan'];

$path = "../imgs/uploads/"; // file luu vào thu muc chua file upload
$tmp_name = $_FILES['file']['tmp_name'];
$name = time()."_".$_FILES['file']['name'];
$type = $_FILES['file']['type']; 
$size = $_FILES['file']['size']; 
// Upload file
move_uploaded_file($tmp_name,$path.$name);
mysql_query("INSERT INTO `01_monan`( `01_ten_monan`, `01_hinh`) VALUES ('$name_monan','$name')");
echo "<script>
	$(document).ready(function() {
    alert('Thêm thành công');
    var id = document.getElementById('maxid').value;
    window.location.href = 'add_nguyenlieu_monan.php?id='+id;
	});
</script>";

}
}
else {
echo "<p style='color:red;'>file không hợp lệ</p>";
}
}
else 
{
echo "<p style='color:red;'>Vui lòng chọn file</p>";
}
}

?>			
			<!-- get max id food -->
			
			<input type="hidden"  name="maxid" id="maxid" value="<?php 
			$maxid = max_id_food();
			echo $maxid['0'];
			?>" />
			<form method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Tên món ăn</td>
					<td><input type="text" name="name_monan" required></td>
				</tr>
				<tr>
					<td>Hình</td>
					<td><input type="file" name="file" ></td>
				</tr>
				
				<tr>
					<td colspan="2" align="center"><input type="submit" name="Submit" class="btn btn_add" value="Thêm"></td>
				</tr>
			</table>
			<form>
		</div>
	</div>
</section>

