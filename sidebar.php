<?php
/**
 * trumpicon sidebar
 *
 * @package trumpicon
 * 
 */
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="sidebar" class="widget-sidebar">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>