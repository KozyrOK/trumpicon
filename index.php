<?php
/**
* The main template file
*
* @package trumpicon
* @version 0.1
*/
get_header();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>
		<?php echo wp_get_document_title(); ?>
	</title>

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />

	<?php wp_head(); ?>
</head>

<body>
	
	<div class="main_post"><!-- Posts loop-->

		<?php if ( have_posts() ) { 
			while ( have_posts() ) { 
				the_post(); 
		?>
	
		<?php } } else { ?>
			No posts
		<?php } ?>		
		
	</div>	

<?php get_footer();?>