<?php 
include('lib/quantri.php');
include('lib/dbCon.php');
$id=$_GET['id'];
$chitiet_monan = monan_id($id);
?>

<?php
	include('header.php');
?>

<section class="p_detail">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<img src="./imgs/uploads/<?=$chitiet_monan['01_hinh'] ?>">
			<h3 style="font-weight:bold;" ><?=$chitiet_monan['01_ten_monan']; ?></h3>
			</div>

			<div class="col-sm-8 detail_table">
				<table>
					<thead>
						<tr>
							<th>Nguyên liệu</th>
							<th>Khối lượng</th>
							<th>Kcal/1g</th>
							<th>Tổng kcal</th>
						</tr>
					</thead>
					<tbody>
						<?php 
					$nguyenlieu_monan = nguyenlieu_monan($id);
					while ($row_NL_MN = mysql_fetch_array($nguyenlieu_monan)) {
					
					 ?>
						<tr>
							<td><?=$row_NL_MN['02_ten_nguyenlieu']?></td>
							<td><?=$row_NL_MN['04_khoiluong']?></td>
							<td><?=$row_NL_MN['02_kcal_1gam']?></td>
							<td><?=$row_NL_MN['04_khoiluong']*$row_NL_MN['02_kcal_1gam']?></td>
						</tr>
				<?php } ?>
					</tbody>
				</table>
			</div>
			
			<div style="margin-top: 20px;" class="col-sm-8 detail_table">
				<table>
					<thead>
						<tr>
							<th>Nhóm chất</th>
						</tr>
					</thead>
					<tbody>
						<?php
					$nhomchat_monan = nhomchat_monan($id);
					while ($row_NC_MN = mysql_fetch_array($nhomchat_monan)) {
					 ?>
						<tr>
							<td><?=$row_NC_MN['05_ten_nhomchat'] ?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		
			<div style="margin-top: 20px;" class="col-sm-8 detail_table">
				<table>
					<thead>
						<tr>
							<th>Vitamin</th>
						</tr>
					</thead>
					<tbody>
						<?php
				$vitamin_monan = vitamin_monan($id);
				while ($row_VT_MN = mysql_fetch_array($vitamin_monan)) {
				 ?>
						<tr>
							<td><?=$row_VT_MN['06_ten_vitamin']?></td>
						</tr>

					<?php } ?>	
					</tbody>
				</table>
			</div>

		</div>
	</div>
</section>
<?php
	include('footer.php');
?>