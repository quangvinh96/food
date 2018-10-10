

<?php
//ds món ăn
function monan(){
    $qr = "SELECT * FROM 01_monan ";
    return mysql_query($qr);
}

//món ăn theo id
function monan_id($id){
    $qr = "SELECT * FROM 01_monan where 01_id_monan = '$id' ";
    $a = mysql_query($qr);
    return mysql_fetch_array($a);
}
// lấy nguyên liệu theo món ăn
function nguyenlieu_monan($id){
    $qr = "SELECT * FROM 04_khoiluong join 01_monan on 01_monan.01_id_monan = 04_khoiluong.04_id_monan JOIN 02_nguyenlieutho on 02_nguyenlieutho.02_id_nguyenlieu = 04_khoiluong.04_id_nguyenlieu WHERE 01_id_monan ='$id'";
    return mysql_query($qr);
}

// lấy nhóm chất theo món ăn
function nhomchat_monan($id){
    $qr = "SELECT 05_ten_nhomchat FROM 05_nhomchat JOIN 07_giatridinhduong on 07_giatridinhduong.07_id_nhomchat = 05_nhomchat.05_id_nhomchat JOIN 02_nguyenlieutho on 02_nguyenlieutho.02_id_nguyenlieu = 07_giatridinhduong.07_id_nguyenlieu JOIN 04_khoiluong ON 04_khoiluong.04_id_nguyenlieu = 07_giatridinhduong.07_id_nguyenlieu JOIN 01_monan on 01_monan.01_id_monan = 04_khoiluong.04_id_monan WHERE 01_id_monan = '$id' GROUP BY 05_id_nhomchat";
    return mysql_query($qr);
}


// lấy nhóm chất theo món ăn
function vitamin_monan($id){
    $qr = "SELECT 06_ten_vitamin FROM 06_vitamin JOIN 07_giatridinhduong on 07_giatridinhduong.07_id_vitamin = 06_vitamin.06_id_vitamin JOIN 02_nguyenlieutho on 02_nguyenlieutho.02_id_nguyenlieu = 07_giatridinhduong.07_id_nguyenlieu JOIN 04_khoiluong ON 04_khoiluong.04_id_nguyenlieu = 07_giatridinhduong.07_id_nguyenlieu JOIN 01_monan on 01_monan.01_id_monan = 04_khoiluong.04_id_monan WHERE 01_id_monan = '$id' GROUP BY 06_id_vitamin";
    return mysql_query($qr);
}


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
//lấy id max bảng món ăn
function max_id_food(){
    $qr = "SELECT MAX(01_id_monan) FROM 01_monan";
    $a = mysql_query($qr);
    return mysql_fetch_array($a);
}

//kiểm tra nguyên liệu đã tồn tại trong món ăn
function count_nguyenlieu_monan($id,$id_nguyenlieu){
    $qr="SELECT COUNT(04_id_khoiluong) FROM 04_khoiluong WHERE 04_id_monan = '$id' and 04_id_nguyenlieu = '$id_nguyenlieu' ";
    $a = mysql_query($qr);
    return mysql_fetch_array($a);
}
// lấy tên ảnh của món ăn 
function name_hinh($id){
    $qr="SELECT 01_hinh FROM 01_monan WHERE 01_id_monan = '$id'  ";
    $a = mysql_query($qr);
    return mysql_fetch_array($a);
}
// ------------------------index user ------------------
// lấy 8 sp ngẫu nhiên
function random_monan(){
    $qr="SELECT * FROM 01_monan ORDER BY RAND() LIMIT 8  ";
    return mysql_query($qr);
}
//----------------------search-------------------------------
// lấy đủ điều kiện
function full_if($s_loai,$s_nhomchat,$s_vitamin,$s_monan){
    $qr="SELECT * FROM 01_monan JOIN 04_khoiluong on 01_monan.01_id_monan = 04_khoiluong.04_id_monan JOIN 02_nguyenlieutho on 02_nguyenlieutho.02_id_nguyenlieu = 04_khoiluong.04_id_nguyenlieu JOIN 07_giatridinhduong on 07_giatridinhduong.07_id_nguyenlieu = 02_nguyenlieutho.02_id_nguyenlieu JOIN 03_loai on 03_loai.03_id_loai = 02_nguyenlieutho.02_id_loai  WHERE 07_id_vitamin = '$s_vitamin' or 07_id_nhomchat = '$s_nhomchat' and 03_id_loai = '$s_loai' and 01_ten_monan LIKE '%$s_monan%' GROUP BY 01_id_monan";
    return mysql_query($qr);
}

function full_if1($s_loai){
    $qr="SELECT * FROM 01_monan JOIN 04_khoiluong on 01_monan.01_id_monan = 04_khoiluong.04_id_monan JOIN 02_nguyenlieutho on 02_nguyenlieutho.02_id_nguyenlieu = 04_khoiluong.04_id_nguyenlieu JOIN 03_loai on 03_loai.03_id_loai = 02_nguyenlieutho.02_id_loai  WHERE  03_id_loai = '$s_loai'  GROUP BY 01_id_monan";
    return mysql_query($qr);
}

function full_if2($s_nhomchat){
    $qr="SELECT * FROM 01_monan JOIN 04_khoiluong on 01_monan.01_id_monan = 04_khoiluong.04_id_monan JOIN 02_nguyenlieutho on 02_nguyenlieutho.02_id_nguyenlieu = 04_khoiluong.04_id_nguyenlieu JOIN 07_giatridinhduong on 07_giatridinhduong.07_id_nguyenlieu = 02_nguyenlieutho.02_id_nguyenlieu JOIN 03_loai on 03_loai.03_id_loai = 02_nguyenlieutho.02_id_loai WHERE  07_id_nhomchat = '$s_nhomchat'  GROUP BY 01_id_monan";
    return mysql_query($qr);
}

function full_if3($s_vitamin){
    $qr="SELECT * FROM 01_monan JOIN 04_khoiluong on 01_monan.01_id_monan = 04_khoiluong.04_id_monan JOIN 02_nguyenlieutho on 02_nguyenlieutho.02_id_nguyenlieu = 04_khoiluong.04_id_nguyenlieu JOIN 07_giatridinhduong on 07_giatridinhduong.07_id_nguyenlieu = 02_nguyenlieutho.02_id_nguyenlieu JOIN 03_loai on 03_loai.03_id_loai = 02_nguyenlieutho.02_id_loai  WHERE 07_id_vitamin = '$s_vitamin'  GROUP BY 01_id_monan";
    return mysql_query($qr);
}

function full_if4($s_monan){
    $qr="SELECT * FROM 01_monan   WHERE 01_ten_monan LIKE '%$s_monan%' ";
    return mysql_query($qr);
}
function full_if5($s_loai,$s_nhomchat){
    $qr="SELECT * FROM 01_monan JOIN 04_khoiluong on 01_monan.01_id_monan = 04_khoiluong.04_id_monan JOIN 02_nguyenlieutho on 02_nguyenlieutho.02_id_nguyenlieu = 04_khoiluong.04_id_nguyenlieu JOIN 07_giatridinhduong on 07_giatridinhduong.07_id_nguyenlieu = 02_nguyenlieutho.02_id_nguyenlieu JOIN 03_loai on 03_loai.03_id_loai = 02_nguyenlieutho.02_id_loai  WHERE  07_id_nhomchat = '$s_nhomchat' and 03_id_loai = '$s_loai'  GROUP BY 01_id_monan";
    return mysql_query($qr);
}

function full_if6($s_loai,$s_vitamin){
    $qr="SELECT * FROM 01_monan JOIN 04_khoiluong on 01_monan.01_id_monan = 04_khoiluong.04_id_monan JOIN 02_nguyenlieutho on 02_nguyenlieutho.02_id_nguyenlieu = 04_khoiluong.04_id_nguyenlieu JOIN 07_giatridinhduong on 07_giatridinhduong.07_id_nguyenlieu = 02_nguyenlieutho.02_id_nguyenlieu JOIN 03_loai on 03_loai.03_id_loai = 02_nguyenlieutho.02_id_loai  WHERE 07_id_vitamin = '$s_vitamin'  and 03_id_loai = '$s_loai'  GROUP BY 01_id_monan";
    return mysql_query($qr);
}

function full_if7($s_loai,$s_monan){
    $qr="SELECT * FROM 01_monan JOIN 04_khoiluong on 01_monan.01_id_monan = 04_khoiluong.04_id_monan JOIN 02_nguyenlieutho on 02_nguyenlieutho.02_id_nguyenlieu = 04_khoiluong.04_id_nguyenlieu left JOIN 03_loai on 03_loai.03_id_loai = 02_nguyenlieutho.02_id_loai  WHERE  03_id_loai = '$s_loai' and 01_ten_monan LIKE '%$s_monan%' GROUP BY 01_id_monan";
    return mysql_query($qr);
}

function full_if8($s_nhomchat,$s_vitamin){
    $qr="SELECT * FROM 01_monan JOIN 04_khoiluong on 01_monan.01_id_monan = 04_khoiluong.04_id_monan JOIN 02_nguyenlieutho on 02_nguyenlieutho.02_id_nguyenlieu = 04_khoiluong.04_id_nguyenlieu JOIN 07_giatridinhduong on 07_giatridinhduong.07_id_nguyenlieu = 02_nguyenlieutho.02_id_nguyenlieu JOIN 03_loai on 03_loai.03_id_loai = 02_nguyenlieutho.02_id_loai  WHERE 07_id_vitamin = '$s_vitamin' or 07_id_nhomchat = '$s_nhomchat'  GROUP BY 01_id_monan";
    return mysql_query($qr);
}

function full_if9($s_nhomchat,$s_monan){
    $qr="SELECT * FROM 01_monan JOIN 04_khoiluong on 01_monan.01_id_monan = 04_khoiluong.04_id_monan JOIN 02_nguyenlieutho on 02_nguyenlieutho.02_id_nguyenlieu = 04_khoiluong.04_id_nguyenlieu JOIN 07_giatridinhduong on 07_giatridinhduong.07_id_nguyenlieu = 02_nguyenlieutho.02_id_nguyenlieu JOIN 03_loai on 03_loai.03_id_loai = 02_nguyenlieutho.02_id_loai  WHERE  07_id_nhomchat = '$s_nhomchat'  and 01_ten_monan LIKE '%$s_monan%' GROUP BY 01_id_monan";
    return mysql_query($qr);
}

function full_if10($s_vitamin,$s_monan){
    $qr="SELECT * FROM 01_monan JOIN 04_khoiluong on 01_monan.01_id_monan = 04_khoiluong.04_id_monan JOIN 02_nguyenlieutho on 02_nguyenlieutho.02_id_nguyenlieu = 04_khoiluong.04_id_nguyenlieu JOIN 07_giatridinhduong on 07_giatridinhduong.07_id_nguyenlieu = 02_nguyenlieutho.02_id_nguyenlieu JOIN 03_loai on 03_loai.03_id_loai = 02_nguyenlieutho.02_id_loai  WHERE 07_id_vitamin = '$s_vitamin' and 01_ten_monan LIKE '%$s_monan%' GROUP BY 01_id_monan";
    return mysql_query($qr);
}
function full_if11($s_nhomchat,$s_vitamin,$s_monan){
    $qr="SELECT * FROM 01_monan JOIN 04_khoiluong on 01_monan.01_id_monan = 04_khoiluong.04_id_monan JOIN 02_nguyenlieutho on 02_nguyenlieutho.02_id_nguyenlieu = 04_khoiluong.04_id_nguyenlieu JOIN 07_giatridinhduong on 07_giatridinhduong.07_id_nguyenlieu = 02_nguyenlieutho.02_id_nguyenlieu JOIN 03_loai on 03_loai.03_id_loai = 02_nguyenlieutho.02_id_loai  WHERE 07_id_vitamin = '$s_vitamin' or 07_id_nhomchat = '$s_nhomchat'  and 01_ten_monan LIKE '%$s_monan%' GROUP BY 01_id_monan";
    return mysql_query($qr);
}

function full_if12($s_loai,$s_vitamin,$s_monan){
    $qr="SELECT * FROM 01_monan JOIN 04_khoiluong on 01_monan.01_id_monan = 04_khoiluong.04_id_monan JOIN 02_nguyenlieutho on 02_nguyenlieutho.02_id_nguyenlieu = 04_khoiluong.04_id_nguyenlieu JOIN 07_giatridinhduong on 07_giatridinhduong.07_id_nguyenlieu = 02_nguyenlieutho.02_id_nguyenlieu JOIN 03_loai on 03_loai.03_id_loai = 02_nguyenlieutho.02_id_loai  WHERE 07_id_vitamin = '$s_vitamin'  and 03_id_loai = '$s_loai' and 01_ten_monan LIKE '%$s_monan%' GROUP BY 01_id_monan";
    return mysql_query($qr);
}
function full_if13($s_loai,$s_nhomchat,$s_monan){
    $qr="SELECT * FROM 01_monan JOIN 04_khoiluong on 01_monan.01_id_monan = 04_khoiluong.04_id_monan JOIN 02_nguyenlieutho on 02_nguyenlieutho.02_id_nguyenlieu = 04_khoiluong.04_id_nguyenlieu JOIN 07_giatridinhduong on 07_giatridinhduong.07_id_nguyenlieu = 02_nguyenlieutho.02_id_nguyenlieu JOIN 03_loai on 03_loai.03_id_loai = 02_nguyenlieutho.02_id_loai  WHERE  07_id_nhomchat = '$s_nhomchat' and 03_id_loai = '$s_loai' and 01_ten_monan LIKE '%$s_monan%' GROUP BY 01_id_monan";
    return mysql_query($qr);
}
function full_if14($s_loai,$s_nhomchat,$s_vitamin){
    $qr="SELECT * FROM 01_monan JOIN 04_khoiluong on 01_monan.01_id_monan = 04_khoiluong.04_id_monan JOIN 02_nguyenlieutho on 02_nguyenlieutho.02_id_nguyenlieu = 04_khoiluong.04_id_nguyenlieu JOIN 07_giatridinhduong on 07_giatridinhduong.07_id_nguyenlieu = 02_nguyenlieutho.02_id_nguyenlieu JOIN 03_loai on 03_loai.03_id_loai = 02_nguyenlieutho.02_id_loai  WHERE 07_id_vitamin = '$s_vitamin' or 07_id_nhomchat = '$s_nhomchat' and 03_id_loai = '$s_loai'  GROUP BY 01_id_monan";
    return mysql_query($qr);
}

?>