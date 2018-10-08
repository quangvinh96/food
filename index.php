<?php 
include('lib/quantri.php');
include('lib/dbCon.php');
?>
<!--  -->
<?php
	include('header.php');
	?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">	

<!-- <section class="index_sec01">
	<video autoplay muted loop id="myVideo" class="index_sec01_video">
	  <source src="./imgs/video.mp4" type="video/mp4">
	  Your browser does not support HTML5 video.
	</video>
	<div class="index_sec01_search">
		<input type="text" name="" class="input_search" placeholder="Bạn muốn ăn gì ?">
		<button class="btn_search"><i class="fa fa-search" aria-hidden="true"></i></button>
	</div>
</section> -->

<section class="index_sec03" >
	<div class="container">
		<div class="index_sec03_form_search">
			<select nam="loai">
				<option value="">Chọn loại</option>
				<?php 
				$loai = loai();
				while ( $row_loai=mysql_fetch_array($loai)) {
					
				
				?>
				<option value="<?=$row_loai['03_id_loai']?>"><?=$row_loai['03_ten_loai']?></option>
				<?php } ?>
			</select>
			<select name="nhomchat">
				<option value="">Nhóm chất</option>
				<?php 
				$nhomchat = nhomchat();
				while ( $row_nhomchat=mysql_fetch_array($nhomchat)) {	
				
				?>
				<option value="<?=$row_nhomchat['05_id_nhomchat']?>"><?=$row_nhomchat['05_ten_nhomchat']?></option>
				<?php } ?>
			</select>
			<select name="vitamin">
				<option value="">Vitamin</option>
				<?php 
				$vitamin = vitamin();
				while ( $row_vitamin=mysql_fetch_array($vitamin)) {	
				
				?>
				<option value="<?=$row_vitamin['06_id_vitamin']?>"><?=$row_vitamin['06_ten_vitamin']?></option>
				<?php } ?>

			</select>
			<input type="text" name="" placeholder="Tên món ăn">
			<button class="btn_search"><i class="fa fa-search" aria-hidden="true"></i></button>
		</div>
		<div class="index_sec03_dish">
			<?php 
			$monan_8 = random_monan();
			while ($row_8_monan = mysql_fetch_array($monan_8)){
			 ?>

			<div class="index_sec03_dish_item">
				<a href="detail.php?id=<?=$row_8_monan['01_id_monan']?>"><div class="index_sec03_dish_item_img">
					<img src="./imgs/uploads/<?=$row_8_monan['01_hinh'] ?>">
				</div>
				<p><?=$row_8_monan['01_ten_monan']; ?> </p>
			</a>
			</div>
			
			<?php }  ?>
		</div>
	</div>
</section>
<section class="index_sec02">
	<div class="container">
		<h2 class="title_page">Tầm quan trọng của dinh dưỡng</h2>
		<p class="index_sec02_content">Chất dinh dưỡng có vai trò vô cùng quan trọng đối với sức khoẻ và sự phát triển của cơ thể. Chế độ ăn đầy đủ dinh dưỡng là bữa ăn có đủ các thành phần dinh dưỡng cả về số lượng và chất lượng. Cùng tìm hiểu dinh dưỡng là gì và những lợi ích mà dinh dưỡng mang đến cho sức khỏe của bạn và gia đình bạn nhé!</p>
		<p class="index_sec02_subtitle">Dinh dưỡng có ba mục đích chính</p>
		<div class="row index_sec02_role" align="center">
			<div class="col-lg-4">
				<img src="./imgs/icon1.png">
				<p>Tạo điều kiện thuận lợi để cơ thể có sức khỏe tốt</p>
			</div>
			<div class="col-lg-4">
				<img src="./imgs/icon2.png">
				<span id="formsearch"></span>
				<p>Phòng ngừa các bệnh liên quan tới ăn uống</p>
			</div>
			<div class="col-lg-4">
				<img src="./imgs/icon3.png">
				<p>Khôi phục sức khỏe sau thời kỳ bệnh tật, thương tích</p>
			</div>
		</div>
	</div>
</section>
<section class="index_sec04">
	<div class="container" align="center">
		<h2 class="title_page">Tháp đồ dinh dưỡng</h2>
		<img src="./imgs/tf.jpg">
	</div>
</section>
<?php
include('footer.php');
?>