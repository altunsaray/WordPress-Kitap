<?php 
/**	
* @package  Wpkitap haber teması
* @file     index.php
* @author   Murat ALTUNSARAY (altunsaray@gmail.com)
*/	
get_header();?>

<div class="ortawrp">
	<div class="pagealign">
		<div class="ortasol">
			<!-- Manşet -->
			<?php $arecent = new WP_Query("category_name=".manset."&posts_per_page=15"); ?>
			<div class="manswrp">
				<div class="ublokwrp">
					<div class="manset_dis">
        				<ul class="manset_list_img">
            			<?php wp_reset_query(); while($arecent->have_posts()) : $arecent->the_post(); ?>
                		<li><a href="<?php the_permalink(); ?>"><?php 
            			if ( has_post_thumbnail() ) {
            			the_post_thumbnail ('manset-thumb', array ('class' => 'float-center'));
        				}
            			else {
            			echo '<img src="'. get_bloginfo('template_directory' ) . '/img/bfoto.jpg" width="650" height="315" class="float-center" />';
        				} ?>  
        				</a><div class="anamanset_title"><a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a></div></li>
            			<?php endwhile; ?>
        				</ul>             
    				<div class="manset_list_buton_dis">
        				<ul class="manset_list_buton">
            			<?php $sy = 1; while($arecent->have_posts()) : $arecent->the_post(); ?>
                		<li><a href="<?php the_permalink(); ?>"><?php echo $sy; ?></a></li>
                		<?php $sy++; endwhile; ?>
                		</ul>     
        			</div>
    				</div>
				</div>
			</div>
			<!-- Manşet Bitti -->
<div class="temizle"></div><br>
<div class="tkutuhab">
    <?php query_posts('showposts=12'); ?> 
    <?php while (have_posts()) : the_post(); ?>
	    <div class="tkutuhab-kutu">
	        <?php 
	            if ( has_post_thumbnail() ) {
	            the_post_thumbnail ('smanset-thumb', array ('class' => 'float-center'));
	        }
	        else {
	            echo '<img src="'. get_bloginfo('template_directory' ) . '/img/bfoto.jpg" class="float-center" />';
	        } ?>
	    <div class="tkutuhab-cate">  <?php $kategori = get_the_category(); $cat_id = $kategori[0]->cat_ID; echo get_cat_name( $cat_id ); ?>  </div>
	        <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?></a></h1>
	    </div>
	    <?php endwhile;?>
</div>
<div class="temizle"></div><br>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>