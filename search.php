<?php 
/**	
* @package  Wpkitap haber teması
* @file     search.php
* @author   Murat ALTUNSARAY (altunsaray@gmail.com)
*/	
get_header();?>

<div class="ortawrp">
	<div class="pagealign">
		<div class="singlepage">
<h1>
<?php printf( __( 'Aranan: %s', 'wpf' ),'' . get_search_query()); ?>
</h1>
		<div class="archivehr"></div>

<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
<article class="list">
	<div class="thumb">
		<?php 
	if ( has_post_thumbnail() ) {
    the_post_thumbnail ('manset-thumb', array ('class' => 'float-center'));
    }
    else {
    echo '<img src="'. get_bloginfo('template_directory' ) . '/img/bfoto.jpg" class="float-center" />';
    } 
?>
	</div>

	<div class="info">
		<div class="title">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</div>
		<p class="date"><?php the_time('j F Y')?></p>
		<h6><?php excerpt('30'); ?></h6>
	</div>
</article>
		<div class="archivehr"></div>
<?php endwhile; ?>
					
<?php else : ?>
	<h3 style="text-align:center;margin:100px auto;font-weight:bold;font-size:30px;line-height:35px;"><?php _e('Özür Dileriz! Hiçbirşey Bulunamadı..', 'wpf'); ?></h3>
<?php endif; ?>	
<?php sayfalama(); ?>
<div class="temizle"></div><br>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>