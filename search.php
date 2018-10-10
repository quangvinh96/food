<?php 
include('lib/quantri.php');
include('lib/dbCon.php');
?>
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
<?php if(isset($_GET['loai'])){
		$s_loai = $_GET['loai'];
		$s_nhomchat = $_GET['nhomchat'];
		$s_vitamin = $_GET['vitamin'];
		$s_monan = $_GET['monan'];

		if($s_loai!=''&&$s_nhomchat==''&&$s_vitamin==''&&$s_monan==''){
			$value_search = full_if1($s_loai);
		}

		elseif($s_loai==''&&$s_nhomchat!=''&&$s_vitamin==''&&$s_monan==''){
			$value_search = full_if2($s_nhomchat);
		}

		elseif($s_loai==''&&$s_nhomchat==''&&$s_vitamin!=''&&$s_monan==''){
			$value_search = full_if3($s_vitamin);
		}

		elseif($s_loai==''&&$s_nhomchat==''&&$s_vitamin==''&&$s_monan!=''){
			$value_search = full_if4($s_monan);
		}

		elseif($s_loai!=''&&$s_nhomchat!=''&&$s_vitamin==''&&$s_monan==''){
			$value_search = full_if5($s_loai,$s_nhomchat);
		}

		elseif($s_loai!=''&&$s_nhomchat==''&&$s_vitamin!=''&&$s_monan==''){
			$value_search = full_if6($s_loai,$s_vitamin);
		}

		elseif($s_loai!=''&&$s_nhomchat==''&&$s_vitamin==''&&$s_monan!=''){
			$value_search = full_if7($s_loai,$s_monan);
		}
		elseif ($s_loai==''&&$s_nhomchat!=''&&$s_vitamin!=''&&$s_monan=='') {
			$value_search = full_if8($s_nhomchat,$s_vitamin);
		}
		elseif ($s_loai==''&&$s_nhomchat!=''&&$s_vitamin==''&&$s_monan!='') {
			$value_search = full_if9($s_nhomchat,$s_monan);
		}
		elseif ($s_loai==''&&$s_nhomchat==''&&$s_vitamin!=''&&$s_monan!='') {
			$value_search = full_if10($s_vitamin,$s_monan);
		}
		elseif ($s_loai==''&&$s_nhomchat!=''&&$s_vitamin!=''&&$s_monan!=''){
			$value_search = full_if11($s_nhomchat,$s_vitamin,$s_monan);
		}
		elseif ($s_loai!=''&&$s_nhomchat==''&&$s_vitamin!=''&&$s_monan!=''){
			$value_search = full_if12($s_loai,$s_vitamin,$s_monan);
		}
		elseif ($s_loai!=''&&$s_nhomchat!=''&&$s_vitamin==''&&$s_monan!=''){
			$value_search = full_if13($s_loai,$s_nhomchat,$s_monan);
		}
		elseif ($s_loai!=''&&$s_nhomchat!=''&&$s_vitamin!=''&&$s_monan==''){
			$value_search = full_if14($s_loai,$s_nhomchat,$s_vitamin);
		}
		elseif ($s_loai==''&&$s_nhomchat==''&&$s_vitamin==''&&$s_monan==''){
			$value_search = random_monan();
		}

		else{
			$value_search = full_if($s_loai,$s_nhomchat,$s_vitamin,$s_monan);
		}

		
		//if(){}
		} ?>


<section class="index_sec03" >
	<div class="container">
		<form action="search.php" method="get">	
		<div class="index_sec03_form_search">
			<select name="loai">
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
			<input type="text" name="monan" placeholder="Tên món ăn">

			<button  class="btn_search"><i class="fa fa-search" aria-hidden="true"></i></button>
		</div>

		</form>
		<?php if(isset($_GET['loai'])){ ?>

			<div class="index_sec03_dish">
			<?php 
			while ($r_8_monan = mysql_fetch_array($value_search)){
			 ?>

			<div class="index_sec03_dish_item">
				<a href="detail.php?id=<?=$r_8_monan['01_id_monan']?>"><div class="index_sec03_dish_item_img">
					<img src="./imgs/uploads/<?=$r_8_monan['01_hinh'] ?>">
				</div>
				<p><?=$r_8_monan['01_ten_monan']; ?> </p>
			</a>
			</div>
			
			<?php }  ?>
		</div>

		<?php } ?>
		<!-- ///////////////////////////////// -->
		<?php if(!isset($_GET['loai'])){ ?>
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
		<?php }  ?>

	</div>
</section>

<?php
include('footer.php');
?>