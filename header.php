<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueprint
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
<?php if ( is_page_template( 'page-home-24.php' ) || is_page_template( 'page-about.php' ) ) {
	echo '<link rel="stylesheet" href="/wp-content/themes/st2024/style.css" />';
} else {
	echo '<link rel="stylesheet" href="/wp-content/themes/st2024/style-old.css" />';
}?>


<script src="/zd24/simple-things-2024/scripts/glide.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
