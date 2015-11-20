<?php
/*
Template Name: Home
*/
get_header(); 
?>
<main id="main" itemprop="mainContentOfPage" role="main">
	<div class="body__content">
		<?php 
		get_template_part( 'template-parts/content/fpage/carousel' );
		get_template_part( 'template-parts/content/fpage/buttons' );
		$cs_query = new WP_Query(array(
		    'post_type'         => 'clients',
		    'posts_per_page'    => '3',
		    'featured'			=> 'yes'
		));
		?><h3 class="posts__excerpt-title" style="font-size: 1.5em"><?php _e('Featured Client Work', DOMAIN ); ?></h3><hr/><?php
		get_template_part( 'template-parts/content/featured/casestudies' );

		$bene_featured_services = ( get_field( 'bene_featured_services', 'option' ) ? get_field( 'bene_featured_services', 'option' ) : '' );
		$bene_fp_display_amount = ( get_field( 'bene_fp_display_amount', 'option' ) ? get_field( 'bene_fp_display_amount', 'option' ) : '' );
		$bene_fp_ft_post_type = ( get_field( 'bene_fp_ft_post_type', 'option' ) ? get_field( 'bene_fp_ft_post_type', 'option' ) : 'services' );
		if( $bene_fp_ft_post_type == 'services' ) :
			$fp_services_query = new WP_Query(array(
			    'post_type'         => 'page',
			    'posts_per_page'    => $bene_fp_display_amount,
			    'meta_key'			=> 'bene_featured_service',
			    'meta_value'		=> '1'
			));
		elseif( $bene_fp_ft_post_type == 'posts' ) :
			$fp_services_query = new WP_Query(array(
			    'post_type'         => 'post',
			    'posts_per_page'    => $bene_fp_display_amount,
			    'featured'			=> 'yes'
			));
		endif;
		
		?>
		<h3 class="posts__excerpt-title" style="font-size: 1.5em"><?php _e('Featured Resources', DOMAIN ); ?></h3>
		<hr/>
		<div class="content__row">
			<div class="col col__two-third">
				<?php 
				if (have_posts()) : while ($fp_services_query->have_posts()) : $fp_services_query->the_post();
					get_template_part( 'template-parts/content/ftservices' );
				endwhile; endif; wp_reset_postdata();
				?>
				<div class="posts">
					<div class="button small">
						<a href="<?php echo home_url(); ?>/category/nonprofit-resources/"><?php _e("View All Resources"); ?></a>
					</div>
				</div>
			</div>
			<div class="col col__one-third">
				<?php get_sidebar('home'); ?>
			</div>
		</div>

	</div>
</main>
<?php get_footer(); ?>