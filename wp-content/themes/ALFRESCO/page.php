<?php get_header(); ?> 
<?php if ( have_posts() ) while ( have_posts() ) : the_post();  ?>
<div class="container page">
	<div class="row">
		<div class="flex_grid col-sm-12">
			<?php the_content() ?>
		</div>
	</div>
</div>
<?php endwhile;  ?>     
<?php get_footer(); ?>