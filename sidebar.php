<?php
/**	
* @package  Wpkitap haber teması
* @file     sidebar.php
* @author   Murat ALTUNSARAY (altunsaray@gmail.com)
*/	
?>

<div id="sidebar">
	<div class="temizle"></div>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?> 
	<?php endif; ?>
</div>