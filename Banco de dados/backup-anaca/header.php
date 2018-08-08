<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-15955139-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-15955139-1');
</script>

	<?php wp_head(); ?>
</head>
<div class="box-menu-institucional">
	<div class="container-centralizado">
		<div class="menu-social">
			<ul>
				<li><a href="https://www.youtube.com/channel/UCu8g4uXRvNL3LU8pP_pZh_A" target="_blank"><i class="fa fa-youtube"></i></a></li>
				<li><a href="https://www.facebook.com/estudioanaca/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
				<li><a href="https://www.instagram.com/estudioanaca/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<div id="menu-institucional">
			<?php wp_nav_menu() ?>
		</div>
		
	</div>
</div>
<body <?php body_class(); ?>>

<div id="box-menu-principal">
	<div class="container-centralizado">
		<div class="logo">
			<?php
				// Display the Custom Logo
				the_custom_logo();
			?>
		</div>
		<?php wp_nav_menu (array('theme_location' => 'secondary-menu','menu_class' => 'menu-principal'));?>
	</div>
</div>





