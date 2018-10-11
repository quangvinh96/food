<?php
	include('./header.php');
	include('../lib/dbCon.php');
	include('../lib/quantri.php');
?>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

</style>
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

<?php 
$id = $_GET['id'];
$monan = monan_id($id);
?>
<!-- form edit -->
<form method="post">
<?php 
if(isset($_POST['cn'])){
	$new_name = $_POST['tenmonan'];
	if($new_name!=$monan['01_ten_monan']){
		mysql_query("UPDATE `01_monan` SET `01_ten_monan`='$new_name' WHERE 01_id_monan = '$id'");
		header("Location:add_nguyenlieu_monan.php?id=$id");
		
	}else{
		echo "<script>alert('Vui lòng điền tên khác với hiện tại');</script>";
		
	}
}
?>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thay đổi tên món ăn</h4>
      </div>
      <div class="modal-body">
      	<div class="clearfix"></div>
       <div class="col-md-3">Tên món ăn: </div>
		<div class="col-md-9 ">
		<input required class="form-control" name="tenmonan" value="<?=$monan['01_ten_monan'] ?>"   />
		</div>
		<div class="clearfix"></div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-default" name="cn" value="Cập nhật" />
      </div>
    </div>

  </div>
</div>
</form>
<!-- end form -->
<!-- change img -->
<p class="a"></p>
 <form id="imageform" method="post" enctype="multipart/form-data" action='doi_anh.php'>
      <input type="file" name="photoimg" id="photoimg" style="display:none" />
      <input type="hidden" name="mah" id="mah_change" value="<?php echo $id ?>"/>
      </form>
<!-- end change -->
<section class="admin">
	<div class="container">
		
		<div>
			   
			<center>
				
				<img style="max-width: 500px; max-height: 300px" src="../imgs/uploads/<?=$monan['01_hinh'] ?>" ><span style="cursor: pointer;" class="fa fa-edit ct"  ma="1">
 
                </span></center><div>



		<div><center><h3><?=$monan['01_ten_monan'] ?><span data-toggle="modal" data-target="#myModal" style="cursor: pointer;">
                  <div class="fa fa-edit changename"></div>
                </span></h3></center></div>
		<br><br>
		<!--////////////////////////////////////-->	
		<form method="post">
			<?php 
			if(isset($_POST['add-NL'])){
				$id_nguyenlieu = $_POST['nguyenlieu'];
				$trongluong = $_POST['trongluong'];

				$kt_nl = count_nguyenlieu_monan($id,$id_nguyenlieu);
				if($kt_nl['0']>0){
						echo "<script>alert('Nguyên liệu đã tồn tại, vui lòng xóa nếu muốn thay đổi trọng lượng');</script>";
				}
				else{
					mysql_query("INSERT INTO `04_khoiluong`(`04_id_monan`, `04_id_nguyenlieu`, `04_khoiluong`) VALUES ('$id','$id_nguyenlieu','$trongluong')");
					echo "<script>alert('Thêm nguyên liệu thành công');</script>";
				}
			}
			?>
			<div>

				<div class="col-md-2">Nguyên liệu:</div>
				<div class="col-md-10"><select name="nguyenlieu" required >
						<?php $nguyenlieu = nguyenlieu();
						while ($row_nguyenlieu = mysql_fetch_array($nguyenlieu)) {	
						 ?>
						<option value="<?=$row_nguyenlieu['02_id_nguyenlieu']?>"><?=$row_nguyenlieu['02_ten_nguyenlieu']?></option>
						<?php } ?>
						
					</select></div>
				<div class="clearfix"></div>
				<br>
				<div class="col-md-2">Trọng lượng:</div>
				<div class="col-md-10"><input class="form-control" name="trongluong" onKeyPress="return isNumberKey(event)" placeholder="g" value="" required /></div>
				<br><br>
				<div><input class="btn btn-info btn-lg" type="submit" value="Thêm" name="add-NL"/></div>
				
			</div>
		</form>

			<br><br>
			<div class="list_table">
			<table>
		  <tr>
		    <th>STT</th>
		    <th>Tên nguyên liệu</th>
		    <th>Trọng lượng</th>
		    <th>Kcal/100g nguyên liệu</th>
		    <th>Tổng kcal</th>
		    <th>Xóa</th>
		  </tr>
		  <?php $ds_nguyenlieu = nguyenlieu_monan($id);
		  		$i=1;
		  		while ($row_ds_nguyenlieu = mysql_fetch_array($ds_nguyenlieu)) {
		  					
		   ?>
		  <tr>
		    <td><?php echo $i++;?></td>
		    <td><?=$row_ds_nguyenlieu['02_ten_nguyenlieu'] ?></td>
		    <td><?=$row_ds_nguyenlieu['04_khoiluong'] ?></td>
		    <td><?=$row_ds_nguyenlieu['02_kcal_1gam'] ?></td>
		    <td><?=$row_ds_nguyenlieu['02_kcal_1gam']*$row_ds_nguyenlieu['04_khoiluong']/100 ?></td>
		    <td style="text-align: left;"><a onclick="return confirm('bạn có chắc muốn xóa ?');" href="delete_khoiluong.php?id=<?=$row_ds_nguyenlieu['04_id_khoiluong']?>&id_monan=<?=$id?>">Xóa</a></td>
		  </tr>
		 <?php } ?>
		 
		</table>
		</div>

	</div>
</section>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="../js/jquery-1.5.min.js"></script>
<script src="../js/jquery.form.js"></script>
 
<script>
$("img").error(function(){
    $(this).attr("src","../imgs/chuaco.png")
	});
</script>
<!-- update ảnh -->
<script type="text/javascript">
$(document).ready(function() 
{ 
$('#photoimg').live('change', function()    
{ 
//$("#mah_change").val(ma); 
$("#imageform").ajaxForm(
{
target: '.a' 
}).submit();
});
}); 
</script>
<!-- click change img -->
<script>
  $(".ct").click(function() {
    $("#photoimg").trigger('click');
    //alert('sds');
});
</script>