<?php 
/* Template Name: Blog */
?>
<?php get_header() ?>

<section>
	<div class="container-centralizado">
		<div class="box-duplo">
			<div class="box-1">
				<h1 class="titulo-sessao magenta">BLOG</h1>
				<p class="texto">Respiramos e vivemos dança. O Estúdio Anacã nasceu com o propósito de levar o poder de transformação e libertação através da dança para todos. Com aulas leves e mais de 40 modalidades para você experimentar, acolhemos todos os biotipos, gêneros e níveis. O importante aqui é ser feliz e livre para se descobrir! Aqui, a dança acontece.</p>
			</div>
			<div class="box-2">
				<div class="thumb-box">
					<img src="<?php echo get_bloginfo('siteurl')?>/wp-content/themes/mesmerize-child/assets/imagens/estudio/img01.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="blog">
	<div class="container-centralizado">
		<div class="post-principal">

		</div>
		<div class="post-principal">
			<?php query_posts( array(
				'posts_per_page' => 1,
				'paged'          => $paged,
				)); ?>	

				<?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
					<div id="corpo-posts">
						<a href="<?php the_permalink() ?>" >
							<div class="thumbnail-destaque">
								<div class="capa-post-principal">
									<?php the_post_thumbnail(); ?>
								</div>
							</div>
								<h1 class="titulo-thumb-cat"><?php the_title(); ?></h1>

							<div class="descricao-post-principal"><?php the_excerpt(); ?></div>
						</a>
					</div>
				<?php endwhile; ?>

			<?php else : ?>
				<p><?php __('No News'); ?></p>
			<?php endif; ?>
		</div>
		<div class="posts">
			<?php query_posts( array(
				'posts_per_page' => 3,
				'paged'          => $paged,
				'order'    => 'ASC'
				)); ?>	

				<?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
					<div id="corpo-posts">
						<a href="<?php the_permalink() ?>" >
							<div class="thumbnail-destaque">
								<div class="capa-home-post">
									<?php the_post_thumbnail(); ?>
								</div>
							</div>
								<h1 class="titulo-thumb-cat"><?php the_title(); ?></h1>
							<div class="descricao-post"><?php the_excerpt(); ?></div>
						</a>
					</div>
				<?php endwhile; ?>
				<div class="box-btns-paginacao">
					<div class="btn-proximo">
						<span class="botao">
							<?php
						// get_next_posts_link() usage with max_num_pages
							echo get_next_posts_link( 'Próxima', $the_query->max_num_pages );
							?>
						</span>
					</div>
					<div class="btn-foward">
						<span class="botao">
							<?php
						// get_next_posts_link() usage with max_num_pages
							echo get_previous_posts_link( 'Anterior' );
							?>
						</span>
					</div>
				</div>

			<?php else : ?>
				<p><?php __('No News'); ?></p>
			<?php endif; ?>
		</div>
	</div>

</section>
<?php get_footer() ?>