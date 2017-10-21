<?php 
/**	
* @package  WpKitap Haber Teması
* @file     header.php
* @author   Murat ALTUNSARAY (altunsaray@gmail.com)
* @link 	http://www.shiftwptema.com/
*/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/reset.css"/> 
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo("template_directory"); ?>/style.css"> 

<link href="https://fonts.googleapis.com/css?family=Oswald:700|Roboto:400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/font-awesome.css"/>
<link href="<?php bloginfo("template_directory"); ?>/css/font-awesome.min.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/script.js"></script>


</head>

<link rel="shortcut icon" href="<?php echo get_option('shiftma_icon'); ?>">
<title> <?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' ); if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'shiftMA' ), max( $paged, $page ) ); ?> </title>
</head><body <?php body_class(); ?>>


<!-- Header Başlangıç -->
<div class="headerwrp">
	<div class="pagealign">
		<div id="logo">
			<a href="<?php bloginfo('url');?>" title="<?php bloginfo("name") ?>"><img src="<?php bloginfo("template_directory"); ?>/img/logo.png"></a>
		</div>
		<div id="headermenu">
			<nav>
      			<div class="navigation">
        			<?php wp_nav_menu( array( 'theme_location' => 'menu-header' ) ); ?>
      			</div>
      			<div class="nav_bg">
        			<div class="nav_bar"> <span></span>  <span></span> <span></span></div>
      			</div>
   			 </nav>
		</div>
		<div class="temizle"></div><br><hr>
	</div>
</div>
<div class="bbs"></div>
<!-- Header Bitiş -->