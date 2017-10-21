<?php 
/**	
* @package  Wpkitap haber teması
* @file     page.php
* @author   Murat ALTUNSARAY (altunsaray@gmail.com)
*/	
get_header();?>

<div class="ortawrp">
	<div class="pagealign">
		<div class="singlepage">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1><br>
<?php the_content(); ?><br><br>
<?php endwhile; ?>
		<?php else : ?>
			<h3 style="text-align:center;margin:100px auto;font-weight:bold;font-size:30px;line-height:35px;"><?php _e('Özür Dileriz! Hiçbirşey Bulamadık :(', 'wpf'); ?></h3>
		<?php endif; ?>	
<div class="temizle"></div><br>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>