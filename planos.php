<?php 
/* Template Name: Planos*/
?>
<?php get_header() ?>
<div id="container-lista-planos">
	<div class="container-centralizado">
		<h1 class="titulo-sessao magenta">Descubra sua Dança</h1>
		<?php
			$args = array(
			  'post_type'   => 'plano'
			 );
			 
			$testimonials = new WP_Query( $args );
			if( $testimonials->have_posts() ) :
			?>
			<ul class="box-lista-planos">
				<?php
				while( $testimonials->have_posts() ) :
				$testimonials->the_post();
				?>
				  <li>
				  	<h1><?php echo the_title(); ?></h1>
				  	<div class="conteudo-lista-planos">
				  		<!-- <p class="tag"><?php echo the_tags(); ?></p> -->
				  		
				  		<p><?php echo the_content(); ?></p>
				  	</div>
				  	<?php the_post_thumbnail(); ?>
				  </li>
				<?php
				endwhile;
				wp_reset_postdata();
				?>
			</ul>
			<?php
			else :
			  esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
			endif;
		?>
	</div>
</div>



<?php get_footer() ?>









