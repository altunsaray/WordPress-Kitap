<?php 
/**	
* @package  Wpkitap haber teması
* @file     footer.php
* @author   Murat ALTUNSARAY (altunsaray@gmail.com)
* @link 	http://www.shiftwptema.com/
*/	
get_header();?>
<div class="temizle"></div><br>
<div class="footerwrp">
	<div class="pagealign">
		<div class="footerhr"></div><div class="temizle"></div>
		<div class="footertxt">
			<h2><a href="<?php bloginfo("home"); ?>/iletisim/" title="İletişim"><b>İletişim</b></a> / 
			<a href="<?php bloginfo("home"); ?>/gizlilik-politikasi/" title="Gizlilik Politikası"><b>Gizlilik Politikası</b></a> / 
			<a href="<?php bloginfo("rss_url"); ?>" target="_blank" title="RSS"><b>RSS</b></a></h2>		
			<b> <?php bloginfo(); ?> - Copyright <sup>&copy;</sup></b>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

<!-- Responsive Menü JavaScript Kodları Başladı -->
<script>
$(document).ready(function(){
		$('.nav_bar').click(function(){
			$('.navigation').toggleClass('visible');
			$('body').toggleClass('opacity');
		});
	});
</script>
<!-- Responsive Menü JavaScript Kodları Bitti -->

</body>
</html>