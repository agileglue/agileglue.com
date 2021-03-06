<?php
/**
 * The homepage template for displaying content from a page
 */

	global $woo_options;
 
/**
 * The Variables
 *
 * Setup default variables, overriding them if the "Theme Options" have been saved.
 */

 	$settings = array(
					'thumb_w' => 100, 
					'thumb_h' => 100, 
					'thumb_align' => 'alignleft'
					);
					
	$settings = woo_get_dynamic_values( $settings );
 
?>
	
	<article <?php post_class('fix'); ?>>
	    
		<header class="section-title">
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		</header>
		
		<section class="entry">
			<?php the_content(); ?>
		</section>  

	</article><!-- /.post -->