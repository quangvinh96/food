<?php
include('../lib/dbCon.php');

if(isset($_POST['mah'])){
 $mahinh = $_POST['mah'];

}else{
$mahinh = 0;
}

$path = "../imgs/uploads/";
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
// kt 
if(isset($_FILES['photoimg']['name'])){
$name = $_FILES['photoimg']['name'];
}else{
$name = "1.png";
}

if(isset($_FILES['photoimg']['size'])){
$size = $_FILES['photoimg']['size'];
}else{
$size = 1;
}
if(strlen($name))
{
list($txt, $ext) = explode(".", $name);
if(in_array($ext,$valid_formats))
{
if($size<(2048*2048))
{
$actual_image_name = $mahinh.time().".".$ext;
$tmp = $_FILES['photoimg']['tmp_name'];
if(move_uploaded_file($tmp, $path.$actual_image_name))
{
$qr = mysql_query("select 01_hinh from 01_monan WHERE 01_id_monan='$mahinh'");
$qr1 = mysql_fetch_array($qr);
$qr2 = $qr1["01_hinh"];
	$tenhinhcu = "../imgs/uploads/".$qr2;
		if ($qr2!='' && file_exists($tenhinhcu))
				{
   				unlink($tenhinhcu);
				}
//thêm ảnh vào csdl
 mysql_query("UPDATE `01_monan` SET `01_hinh`='$actual_image_name' WHERE 01_id_monan = '$mahinh'");
 echo "<script>    
        alert('Đổi ảnh thành công');
        location.reload();
	    </script>";
}
else
echo "<script>    
        alert('Lỗi không xác định');
	    </script>";
}
else
echo "<script>    
        alert('Kích thước ảnh phải nhỏ hơn 2MB');
	    </script>"; 
}
else
echo "<script>    
        alert('Tập tin không hợp lệ');
	    </script>"; 
}
else
echo "<script>    
        alert('Tập tin không hợp lệ');
	    </script>";
exit;
}
?>