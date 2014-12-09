<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package agency
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>


<?php wp_head(); ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/bxslider.js"></script>
</head>

<body class="cms-home">
<div id="page" class="hfeed site">
	<?php wp_reset_query(); ?>
	<?php 
		if(is_home() || is_front_page()) {
			get_template_part( 'inc/header/header_home' );
		} else {
			get_template_part( 'inc/header/header_page' );
		}
	?>

