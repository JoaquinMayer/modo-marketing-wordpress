<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Modo_Marketing
 * @since Modo Marketing 1.0
 */

if (is_front_page()) :
	get_header('front');
else :
	get_header();
endif;

?>
<?php
get_template_part('template-parts/home/contact');
get_template_part('template-parts/home/experts');
get_template_part('template-parts/home/materiales');

get_footer();
?>