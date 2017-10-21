<?php 
/**	
* @package  Wpkitap haber teması
* @file     single.php
* @author   Murat ALTUNSARAY (altunsaray@gmail.com)
*/	
get_header();?>

<div class="ortawrp">
	<div class="pagealign">
		<div class="singlepage">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1><br>
<?php 
	if ( has_post_thumbnail() ) {
    the_post_thumbnail ('manset-thumb', array ('class' => 'float-center'));
    }
    else {
    echo '<img src="'. get_bloginfo('template_directory' ) . '/img/bfoto.jpg" width="650" height="315" class="float-center" />';
    } 
?>  <br><br>
<h3><?php excerpt('30'); ?></h3><div class="footerhr"></div><div class="temizle"></div>
<?php the_content(); ?><br><br>
<?php comments_template(); ?><br><br>
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