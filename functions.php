<?php
/**
* @package WordPress
 * @subpackage Wpkitap haber teması
 * @since 1.0
 */


/* ---------- >> MENÜ TANIMLAMA */

add_action('init', 'register_my_menus');
function register_my_menus() {
	register_nav_menus( array(
			'menu-header' =>__('Ana Menü'), 
			)
		);
}


/* ---------- >> BİLEŞEN DESTEĞİ */

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'WPkitap Bilesen', // Bileşen adı
'before_widget' => '<div class="bilesen">', // Bileşen için başlangıç div tagı ve classı
'after_widget' => '</div>',// Bileşen için sonlandırıcı div tagı
'before_title' => '<div class="bilesenbaslik"><i class="icon-chevron-sign-right"></i> ',//Bileşe başlığı için div tagı ve classı
'after_title' => '</div>',//Bileşen başlığının sonu için div tagı
));


/* ---------- >> ÖNE ÇIKARILMIŞ GÖRSEL */

add_theme_support( 'post-thumbnails');
// Resmi 120x120 boyutlandırında küçültüp kırpar koddaki true kırpma işlemini görür.
add_image_size('manset-thumb', 650,315, true);
add_image_size('smanset-thumb', 194,120, true);


/* ---------- >> YAZI KISALTMA */

function excerpt($num) {
	$limit = $num+1;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt)."...";
	echo $excerpt;
}


/* ---------- >> SAYFALAMA */

function sayfalama($pages = '', $range = 3)
{
$showitems = ($range * 2)+1;
global $paged;
if(empty($paged)) $paged = 1;
if($pages == '')
{
global $wp_query;
$pages = $wp_query->max_num_pages;
if(!$pages)
{
$pages = 1;
}
}
if(1 != $pages)
{
echo "<div class='wp-pagenavi'>";
echo "<span>".$paged."/".$pages."</span>";
if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>İlk</a>";
if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&laquo;</a>";
for ($i=1; $i <= $pages; $i++)
{
if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
{
echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
}
}
if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&raquo;</a>";
if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Son</a>";
echo "</div>\n";
}
}



if (!current_user_can('administrator')) :
      show_admin_bar(false);
endif;


?>