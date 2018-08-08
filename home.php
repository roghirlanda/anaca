<?php 
/* Template Name: Home */
get_header()
?>
<ul class="bxslider">
     <li>
	<div class="bg-slider">
  		<img src="<?php echo get_bloginfo('siteurl') ?>/wp-content/themes/mesmerize-child/assets/imagens/home/slider/banner-aulas.png" alt="">
  	</div> 
  </li>
  <li>
  	<div class="bg-slider">
  		<a href="<?php echo get_bloginfo('siteurl') ?>/pilates">
  			<img src="<?php echo get_bloginfo('siteurl') ?>/wp-content/themes/mesmerize-child/assets/imagens/home/slider/slider2.png" alt="">
		</a>
  	</div>
  </li>
</ul>
<section id="box-unidades-home">
	<div class="container-centralizado">
		<h1 class="titulo-sessao">Escolha a unidade</h1>
		<div class="box-unidades-home">
			<ul class="box-unidades">
				<li>
					<a href="<?php echo get_bloginfo('siteurl') ?>/unidades/jardins">
						<h2>Jardins</h2>
						<div class="bg"><img src="<?php echo get_bloginfo('siteurl')?>/wp-content/themes/mesmerize-child/assets/imagens/home/unidades/background.jpg" alt=""></div>
					</a>
				</li>
				<li>
					<a href="<?php echo get_bloginfo('siteurl') ?>/unidades/pinheiros">
						<h2>Pinheiros</h2>
						<div class="bg"><img src="<?php echo get_bloginfo('siteurl')?>/wp-content/themes/mesmerize-child/assets/imagens/home/unidades/background.jpg" alt=""></div>
					</a>
				</li>
				<li>
					<a href="<?php echo get_bloginfo('siteurl') ?>/unidades/morumbi">
						<h2>Morumbi</h2>
						<div class="bg"><img src="<?php echo get_bloginfo('siteurl')?>/wp-content/themes/mesmerize-child/assets/imagens/home/unidades/background.jpg" alt=""></div>
					</a>
				</li>
				<li>
					<a href="<?php echo get_bloginfo('siteurl') ?>/unidades/tatuape">
						<h2>Tatuapé</h2>
						<div class="bg"><img src="<?php echo get_bloginfo('siteurl')?>/wp-content/themes/mesmerize-child/assets/imagens/home/unidades/background.jpg" alt=""></div>
					</a>
				</li>
			</ul><?php  ?>
			<div class="box-form-unidades">
				<a href="<?php echo get_bloginfo('siteurl') ?>/matricula">
					<div class="topo-box-form">
						<h2>Matricule-se</h2>
						<div class="arrow-unidades"><img src="<?php echo get_bloginfo('siteurl')?>/wp-content/themes/mesmerize-child/assets/imagens/home/unidades/right-arrow.svg" alt=""></div>
					</div>
				</a>
				<div class="form-unidades">
					<?php echo do_shortcode( '[contact-form-7 id="52" title="Unidades"]' ); ?>
					
				</div>
			</div>
		</div>
	</div>
</section>
<section id="estudio">
	<div class="container-centralizado">
		<div class="box-conteudo">
			<h1 class="titulo-sessao">O estúdio</h1>
			<p>Respiramos e vivemos dança. O Estúdio Anacã nasceu com o propósito de levar o poder de transformação e libertação através da dança para todos. Com aulas leves e mais de 40 modalidades para você experimentar, acolhemos todos os biotipos, gêneros e níveis. O importante aqui é ser feliz e livre para se descobrir! Aqui, a dança acontece.</p>
			<a href="<?php echo get_bloginfo('siteurl') ?>/o-estudio">
				<div class="btn">Conheça</div>
			</a>

		</div>
	</div>
</section>
<section id="quem-faz">
	<div class="container-centralizado" id="box-conteudo-quem-faz">
		<div class="box-conteudo" >
			<h1 class="titulo-sessao" style="margin: 0">Quem faz Anacã</h1>
			<div id="depoimentos">
				<?php echo do_shortcode('[testimonial_rotator id=101 img_size="large"]') ?>
			</div>
		</div>
	</div>
</section>
<section id="eventos">
	<div class="container-centralizado" id="box-conteudo-eventos">
		<div class="box-conteudo">
			<h1 class="titulo-sessao">Eventos</h1>
			<?php
			    $args = array(
			      'post_type'   => 'evento',
			      'posts_per_page' => 4
			     );
     
    $testimonials = new WP_Query( $args );
    if( $testimonials->have_posts() ) :
    ?>
    <ul class="box-lista-eventos">
        <?php
        while( $testimonials->have_posts() ) :
        $testimonials->the_post();
        ?>
          <li>
          	 <!-- <a href="<?php echo get_permalink() ?>">  -->
            <h1><?php echo the_title(); ?></h1>
            <div class="conteudo-lista-eventos">
                <p><?php echo the_excerpt(); ?></p>
            </div>
            <?php the_post_thumbnail(); ?>
            <!-- </a> -->
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
</section>

<?php get_footer() ?>

