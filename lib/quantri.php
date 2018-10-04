

<?php
//ds loại thực phẩm
function loai(){
	$qr = "SELECT * FROM 03_loai ";
	return mysql_query($qr);
}

//ds loại thực phẩm khác loại hiện tại
function loaikhac($loaiht){
    $qr = "SELECT * FROM 03_loai WHERE 03_id_loai <> '$loaiht' ";
    return mysql_query($qr);
}

// lấy loại theo id
function loai_id($id){
    $qr = "SELECT * FROM 03_loai where 03_id_loai = '$id'";
    $a = mysql_query($qr);
    return mysql_fetch_array($a);
}
//ds nhóm chất
function nhomchat(){
    $qr = "SELECT * FROM 05_nhomchat ";
    return mysql_query($qr);
}
// lấy nhóm chất theo id
function nhomchat_id($id){
    $qr = "SELECT * FROM 05_nhomchat where 05_id_nhomchat = '$id'";
    $a = mysql_query($qr);
    return mysql_fetch_array($a);
}

//ds vitamin
function vitamin(){
    $qr = "SELECT * FROM 06_vitamin ";
    return mysql_query($qr);
}
// lấy vitamin theo id
function vitamin_id($id){
    $qr = "SELECT * FROM 06_vitamin where 06_id_vitamin = '$id'";
    $a = mysql_query($qr);
    return mysql_fetch_array($a);
}

//ds nguyên liệu
function nguyenlieu(){
    $qr = "SELECT * FROM 02_nguyenlieutho left join 03_loai on 02_nguyenlieutho.02_id_loai = 03_loai.03_id_loai order by 02_id_loai desc";
    return mysql_query($qr);
}
// lấy nguyên liệu theo id
function nguyenlieu_id($id){
    $qr = "SELECT * FROM 02_nguyenlieutho left join 03_loai on 02_nguyenlieutho.02_id_loai = 03_loai.03_id_loai where 02_id_nguyenlieu = '$id'";
    $a = mysql_query($qr);
    return mysql_fetch_array($a);
}
//lấy tên nguyên liệu theo bảng  nhóm chât
 function nguyenlieu_nhomchat(){
    $qr = "SELECT * FROM 02_nguyenlieutho left join 07_giatridinhduong on 02_nguyenlieutho.02_id_nguyenlieu = 07_giatridinhduong.07_id_nguyenlieu left join 05_nhomchat on  07_giatridinhduong.07_id_nhomchat = 05_nhomchat.05_id_nhomchat where 07_id_nhomchat <> 'NULL' order by 02_id_nguyenlieu desc";
    return mysql_query($qr);
}

//lấy tên nguyên liệu theo bảng vitamin
function nguyenlieu_vitamin(){
    $qr = "SELECT * FROM 02_nguyenlieutho left join 07_giatridinhduong on 02_nguyenlieutho.02_id_nguyenlieu = 07_giatridinhduong.07_id_nguyenlieu left join 06_vitamin on  07_giatridinhduong.07_id_vitamin = 06_vitamin.06_id_vitamin where 07_id_vitamin <> 'NULL' order by 02_id_nguyenlieu desc";
    return mysql_query($qr);
}

//kiểm tra tồn tại nguyên liệu theo nhóm chất
function check_nhomchat($nguyenlieu,$nhomchat){
    $qr = "SELECT COUNT(07_id_giatri) FROM 07_giatridinhduong WHERE 07_id_nguyenlieu ='$nguyenlieu' and 07_id_nhomchat = '$nhomchat'";
    $a = mysql_query($qr);
    return mysql_fetch_array($a);
}
//kiểm tra tồn tại nguyên liệu theo vitamin
function check_vitamin($nguyenlieu,$vitamin){
    $qr = "SELECT COUNT(07_id_giatri) FROM 07_giatridinhduong WHERE 07_id_nguyenlieu ='$nguyenlieu' and 07_id_vitamin = '$vitamin'";
    $a = mysql_query($qr);
    return mysql_fetch_array($a);
}
?>