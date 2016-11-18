<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Triangle_X
 */

get_header(); ?>

<div class="generic-wrapper">
	<?php
		while(have_posts())
		{
			the_post();
			get_template_part('template-parts/single', get_post_format());

			//the_post_navigation();
		}
	?>
	
	<section class="comments">
		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if(comments_open() || get_comments_number())
				comments_template();
		?>
	</section>
</div>

<?php get_footer(); ?>