<?php mesmerize_get_header(); ?>
<div class="container-centralizado">
	<div class="conteudo-post">
		<?php
		if ( have_posts() ):
			while ( have_posts() ):
				the_post();
				get_template_part( 'template-parts/content', 'single' );
			endwhile;
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</div>
</div>
<?php get_footer(); ?>
