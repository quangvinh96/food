<footer>
	<div class="container">
		<p class="copyright">© Tran Le Huynh Nhu</p>
	</div>
</footer>

<script type="text/javascript">
	var myArray = ['#0b6946', '#b11f59', '#d17c43', '#8a286b', '#b1c967', 'red']; 
	$('.headertop_nav_menu li').hover(function(){
		var rand = myArray[Math.floor(Math.random() * myArray.length)];
		$(this).find('a').css('color', rand);
		console.log(rand);

	}, function(){
		$(this).find('a').css('color', 'black');
	});
	$(window).scroll(function() {
		var $height = $(window).scrollTop();
	  if($height > 50) {
			$('.headertop').addClass('active');
		} else {
			$('.headertop').removeClass('active');
		}
	});
</script>
</body>
</html>