<?php
/**
 * Template Name: Home Page
 */
get_header();
?>
<main id="site-content" role="main">
	<?php echo do_shortcode('[student_frm_shortcode]'); ?>
</main>
<?php
get_footer();