<?php 
/**	
* @package  Wpkitap haber teması
* @file     404.php
* @author   Murat ALTUNSARAY (altunsaray@gmail.com)
*/	
get_header();?>

<div class="ortawrp">
	<div class="pagealign">
		<div class="hata">
			<h1>404</h1>
			<h2>Özür Dileriz :( <br> Aradığınız Sayfa bulunamadı.</h2>
			<div class="temizle"></div>
			<h3>Sayfa yayından kaldırılmış veya adresi yanlış yazmış olabilirsiniz.  Lütfen <a href="<?php bloginfo('url');?>" title="Ana Sayfa'ya dön!">Ana Sayfa</a> 'ya gidin veya yeniden arayın.</h3>
			<br><br><?php get_search_form(); ?>
			<div class="temizle"></div><br>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>