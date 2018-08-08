<?php 
/* Template Name: Aulas */
?>
<?php get_header() ?>
<div class="container-aulas">
	<div class="container-centralizado">
		<h1 class="titulo-aulas" style="text-align: center;">Aulas</h1>
	</div>
</div>
<div class="container-centralizado">
	<ul class="menu-aulas">
		<li id="bemestar">Bem Estar</li>
		<li id="dancasculturais">Danças culturais</li>
		<li id="dancadesalao">Dança de salão</li>
		<li id="dancastecnicas">Danças técnicas</li>
		<li id="dancasurbanas">Danças urbanas</li>
		<li id="fitness">Aulas Fitness</li>
		<li id="outros">Outras Aulas</li>
	</ul>
</div>
<div class="container-aulas" id="box-container-aulas">
	<div class="container-centralizado" id="lista-aula-bemestar">
		<h1 class="titulo-aulas">Bem Estar</h1>
		<?php
			$args = array(
			  'post_type'   => 'aula',
			  'tax_query'   => array(
			  	array(
			  		'taxonomy' => 'aula_category',
			  		'field'    => 'slug',
			  		'terms'    => 'bem-estar'
			  	)
			  )
			 );
			 
			$testimonials = new WP_Query( $args );
			if( $testimonials->have_posts() ) :
			?>
			<ul class="box-aulas">
				<?php
				while( $testimonials->have_posts() ) :
				$testimonials->the_post();
				?>
				  <li>
				  	<div class="conteudo-aulas">
				  		<!-- <p class="tag"><?php echo the_tags(); ?></p> -->
				  		<h1><?php echo the_title(); ?></h1>
				  		<p><?php echo the_content(); ?></p>

				  	</div>
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
	<div class="container-centralizado" id="lista-aula-dancasculturais">
		<h1 class="titulo-aulas">Danças culturais</h1>
		<?php
			$args = array(
			  'post_type'   => 'aula',
			  'tax_query'   => array(
			  	array(
			  		'taxonomy' => 'aula_category',
			  		'field'    => 'slug',
			  		'terms'    => 'dancas-culturais'
			  	)
			  )
			 );
			 
			$testimonials = new WP_Query( $args );
			if( $testimonials->have_posts() ) :
			?>
			<ul class="box-aulas">
				<?php
				while( $testimonials->have_posts() ) :
				$testimonials->the_post();
				?>
				  <li>
				  	<div class="conteudo-aulas">
				  		<h1><?php echo the_title(); ?></h1>
				  		<p><?php echo the_content(); ?></p>
				  	</div>
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
	<div class="container-centralizado" id="lista-aula-dancadesalao">
		<h1 class="titulo-aulas">Dança de salão</h1>
		<?php
			$args = array(
			  'post_type'   => 'aula',
			  'tax_query'   => array(
			  	array(
			  		'taxonomy' => 'aula_category',
			  		'field'    => 'slug',
			  		'terms'    => 'danca-de-salao'
			  	)
			  )
			 );
			 
			$testimonials = new WP_Query( $args );
			if( $testimonials->have_posts() ) :
			?>
			<ul class="box-aulas">
				<?php
				while( $testimonials->have_posts() ) :
				$testimonials->the_post();
				?>
				  <li>
				  	<div class="conteudo-aulas">
				  		<h1><?php echo the_title(); ?></h1>
				  		<p><?php echo the_content(); ?></p>
				  	</div>
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
	<div class="container-centralizado" id="lista-aula-dancastecnicas">
		<h1 class="titulo-aulas">Danças Técnicas</h1>
		<?php
			$args = array(
			  'post_type'   => 'aula',
			  'tax_query'   => array(
			  	array(
			  		'taxonomy' => 'aula_category',
			  		'field'    => 'slug',
			  		'terms'    => 'dancas-tecnicas'
			  	)
			  )
			 );
			 
			$testimonials = new WP_Query( $args );
			if( $testimonials->have_posts() ) :
			?>
			<ul class="box-aulas">
				<?php
				while( $testimonials->have_posts() ) :
				$testimonials->the_post();
				?>
				  <li>
				  	<div class="conteudo-aulas">
				  		<h1><?php echo the_title(); ?></h1>
				  		<p><?php echo the_content(); ?></p>
				  	</div>
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
	<div class="container-centralizado" id="lista-aula-dancasurbanas">
		<h1 class="titulo-aulas">Danças Urbanas</h1>
		<?php
			$args = array(
			  'post_type'   => 'aula',
			  'tax_query'   => array(
			  	array(
			  		'taxonomy' => 'aula_category',
			  		'field'    => 'slug',
			  		'terms'    => 'dancas-urbanas'
			  	)
			  )
			 );
			 
			$testimonials = new WP_Query( $args );
			if( $testimonials->have_posts() ) :
			?>
			<ul class="box-aulas">
				<?php
				while( $testimonials->have_posts() ) :
				$testimonials->the_post();
				?>
				  <li>
				  	<div class="conteudo-aulas">
				  		<h1><?php echo the_title(); ?></h1>
				  		<p><?php echo the_content(); ?></p>
				  	</div>
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
	<div class="container-centralizado" id="lista-aula-fitness">
		<h1 class="titulo-aulas">Fitness</h1>
		<?php
			$args = array(
			  'post_type'   => 'aula',
			  'tax_query'   => array(
			  	array(
			  		'taxonomy' => 'aula_category',
			  		'field'    => 'slug',
			  		'terms'    => 'fitness'
			  	)
			  )
			 );
			 
			$testimonials = new WP_Query( $args );
			if( $testimonials->have_posts() ) :
			?>
			<ul class="box-aulas">
				<?php
				while( $testimonials->have_posts() ) :
				$testimonials->the_post();
				?>
				  <li>
				  	<div class="conteudo-aulas">
				  		<h1><?php echo the_title(); ?></h1>
				  		<p><?php echo the_content(); ?></p>
				  	</div>
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
	<div class="container-centralizado" id="lista-aula-outros">
		<h1 class="titulo-aulas">Outros</h1>
		<?php
			$args = array(
			  'post_type'   => 'aula',
			  'tax_query'   => array(
			  	array(
			  		'taxonomy' => 'aula_category',
			  		'field'    => 'slug',
			  		'terms'    => 'outros'
			  	)
			  )
			 );
			 
			$testimonials = new WP_Query( $args );
			if( $testimonials->have_posts() ) :
			?>
			<ul class="box-aulas">
				<?php
				while( $testimonials->have_posts() ) :
				$testimonials->the_post();
				?>
				  <li>
				  	<div class="conteudo-aulas">
				  		<h1><?php echo the_title(); ?></h1>
				  		<p><?php echo the_content(); ?></p>
				  	</div>
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
