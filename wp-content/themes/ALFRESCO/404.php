<?php get_header(); ?> 
<style>
	footer, nav, .slider, .cbalink{
		display: none;
	}

	body, html, .page-404{
		height: 95%;
	}
</style>
<div class="page-404">
<div class="row">
	<div class="inner-404 col-sm-offset-4 col-sm-4">
		<p>error: <span>404</span></p>
		<h1>Страница не найдена!</h1>
		<a href="<?php echo get_home_url(); ?>">Главная</a>
		</div>
	</div>	
</div>


<?php get_footer(); ?>