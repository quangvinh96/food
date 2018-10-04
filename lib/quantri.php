

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
?>