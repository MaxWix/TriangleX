<?php
/**
 * Template part for displaying all pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Triangle_X
 */
 
?>

<?php insert_ad('Global Banner Top', 'banner-top'); ?>

<div class="generic-container">
	<div class="category-title"><center><?php the_title(); ?></center></div>

	<div style="margin-left: 15%; margin-right: 15%;">
		<?php the_content(); ?>
	</div>
</div>

<?php insert_ad('Global Banner Bottom', 'banner-bottom'); ?>