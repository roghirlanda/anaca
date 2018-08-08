<?php

// FUNÇÃO DE INCLUSÃO DE STYLE E SCRIPTS
function estilo() {
    // enqueue estilo pai
	wp_enqueue_style('tema-pai', get_template_directory_uri() .'/style.css');

	// enqueue estilo filho
    wp_enqueue_style('tema-filho', get_stylesheet_directory_uri() .'/assets/css/style.css', array('tema-pai'));
	wp_enqueue_style('slider-style', get_stylesheet_directory_uri() .'/assets/css/jquery.bxslider.css');
	wp_enqueue_style('reset', get_stylesheet_directory_uri() .'/assets/css/reset.css', array('tema-pai'));

    // SCRIPT    
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array( 'jquery' ) );
    wp_enqueue_script( 'slider', get_stylesheet_directory_uri() . '/assets/js/jquery.bxslider.js', array( 'jquery' ) );
}
add_action('wp_enqueue_scripts', 'estilo');


// REMOVE A BAR DE ADMIN
add_filter( 'show_admin_bar', '__return_false' );

//Register Navigations
add_action( 'init', 'menus_site' );
function menus_site() {
   register_nav_menus(
        array(
            'primary-menu' => __( 'MenuInstitucional' ),
            'secondary-menu' => __( 'MenuPrincipal' )
        )
    );
}

// ADD LOGO
function mytheme_custom_logo() {
    // Try to retrieve the Custom Logo
    $output = '';
    if (function_exists('get_custom_logo'))
        $output = get_custom_logo();

    // Nothing in the output: Custom Logo is not supported, or there is no selected logo
    // In both cases we display the site's name
    if (empty($output))
        $output = '<h1><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
    echo $output;
}
/**
 * Adicionamos uma acção no inicio do carregamento do WordPress
 * através da função add_action( 'init' )
 */
add_action( 'init', 'create_post_type_aulas' );

/**
 * Esta é a função que é chamada pelo add_action()
 */
function create_post_type_aulas() {

    /**
     * Labels customizados para o tipo de post
     * 
     */
    $labels = array(
        'name' => _x('Aulas', 'post type general name'),
        'singular_name' => _x('Aula', 'post type singular name'),
        'add_new' => _x('Add New', 'Aula'),
        'add_new_item' => __('Add New Aula'),
        'edit_item' => __('Edit Aula'),
        'new_item' => __('New Aula'),
        'all_items' => __('All Aulas'),
        'view_item' => __('View Aula'),
        'search_items' => __('Search Aulas'),
        'not_found' =>  __('No Aulas found'),
        'not_found_in_trash' => __('No Aulas found in Trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Aulas'
    );
    
    /**
     * Registamos o tipo de post film através desta função
     * passando-lhe os labels e parâmetros de controlo.
     */
    register_post_type( 'aula', array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'has_archive' => 'Aulas',
        'rewrite' => array(
         'slug' => 'Aulas',
         'with_front' => false,
        ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail','excerpt'),
        // 'taxonomies' => array('post_tag'),
        )
    );
    
    /**
     * Registamos a categoria de filmes para o tipo de post film
     */
    register_taxonomy( 'aula_category', array( 'aula' ), array(
        'hierarchical' => true,
        'label' => __( 'Aula Category' ),
        'labels' => array( // Labels customizadas
        'name' => _x( 'Categories', 'taxonomy general name' ),
        'singular_name' => _x( 'Category', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Categories' ),
        'all_items' => __( 'All Categories' ),
        'parent_item' => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item' => __( 'Edit Category' ),
        'update_item' => __( 'Update Category' ),
        'add_new_item' => __( 'Add New Category' ),
        'new_item_name' => __( 'New Category Name' ),
        'menu_name' => __( 'Category' ),
    ),
        'show_ui' => true,
        'show_in_tag_cloud' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'Aulas/categories',
            'with_front' => false,

        ),
        )
    );
    
    /** 
     * Esta função associa tipos de categorias com tipos de posts.
     * Aqui associamos as tags ao tipo de post film.
     */
    register_taxonomy_for_object_type( 'tags', 'aula' );
}


// LEIA MAIS

function wpdocs_custom_excerpt_length( $length ) {
    return 12;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );






// PLANOS

/**
 * Adicionamos uma acção no inicio do carregamento do WordPress
 * através da função add_action( 'init' )
 */
add_action( 'init', 'create_post_type_planos' );

/**
 * Esta é a função que é chamada pelo add_action()
 */
function create_post_type_planos() {

    /**
     * Labels customizados para o tipo de post
     * 
     */
    $labels = array(
        'name' => _x('Planos', 'post type general name'),
        'singular_name' => _x('Plano', 'post type singular name'),
        'add_new' => _x('Add New', 'Plano'),
        'add_new_item' => __('Add New Plano'),
        'edit_item' => __('Edit Plano'),
        'new_item' => __('New Plano'),
        'all_items' => __('All Planos'),
        'view_item' => __('View Plano'),
        'search_items' => __('Search Planos'),
        'not_found' =>  __('No Planos found'),
        'not_found_in_trash' => __('No Planos found in Trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Planos'
    );
    /**
     * Registamos o tipo de post film através desta função
     * passando-lhe os labels e parâmetros de controlo.
     */
    register_post_type( 'plano', array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'has_archive' => 'Planos',
        'rewrite' => array(
         'slug' => 'Planos',
         'with_front' => false,
        ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail','excerpt'),
        // 'taxonomies' => array('post_tag'),
        )
    );
    /**
     * Registamos a categoria de filmes para o tipo de post film
     */
    register_taxonomy( 'plano_category', array( 'plano' ), array(
        'hierarchical' => true,
        'label' => __( 'Plano Category' ),
        'labels' => array( // Labels customizadas
        'name' => _x( 'Categories', 'taxonomy general name' ),
        'singular_name' => _x( 'Category', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Categories' ),
        'all_items' => __( 'All Categories' ),
        'parent_item' => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item' => __( 'Edit Category' ),
        'update_item' => __( 'Update Category' ),
        'add_new_item' => __( 'Add New Category' ),
        'new_item_name' => __( 'New Category Name' ),
        'menu_name' => __( 'Category' ),
    ),
        'show_ui' => true,
        'show_in_tag_cloud' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'Planos/categories',
            'with_front' => false,

        ),
        )
    );
    /** 
     * Esta função associa tipos de categorias com tipos de posts.
     * Aqui associamos as tags ao tipo de post film.
     */
    register_taxonomy_for_object_type( 'tags', 'plano' );
}




// EVENTOS
/**
 * Adicionamos uma acção no inicio do carregamento do WordPress
 * através da função add_action( 'init' )
 */
add_action( 'init', 'create_post_type_eventos' );

/**
 * Esta é a função que é chamada pelo add_action()
 */
function create_post_type_eventos() {

    /**
     * Labels customizados para o tipo de post
     * 
     */
    $labels = array(
        'name' => _x('Eventos', 'eventos'),
        'singular_name' => _x('Evento', 'evento'),
        'add_new' => _x('Add New', 'Evento'),
        'add_new_item' => __('Add New Evento'),
        'edit_item' => __('Edit Evento'),
        'new_item' => __('New Evento'),
        'all_items' => __('All Eventos'),
        'view_item' => __('View Evento'),
        'search_items' => __('Search Eventos'),
        'not_found' =>  __('No Eventos found'),
        'not_found_in_trash' => __('No Eventos found in Trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Eventos'
    );
    /**
     * Registamos o tipo de post film através desta função
     * passando-lhe os labels e parâmetros de controlo.
     */
    register_post_type( 'evento', array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'has_archive' => 'Eventos',
        'rewrite' => array(
         'slug' => 'Eventos',
         'with_front' => false,
        ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail','excerpt'),
        // 'taxonomies' => array('post_tag'),
        )
    );
    /**
     * Registamos a categoria de filmes para o tipo de post film
     */
    register_taxonomy( 'evento_category', array( 'evento' ), array(
        'hierarchical' => true,
        'label' => __( 'Evento Category' ),
        'labels' => array( // Labels customizadas
        'name' => _x( 'Categories', 'taxonomy general name' ),
        'singular_name' => _x( 'Category', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Categories' ),
        'all_items' => __( 'All Categories' ),
        'parent_item' => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item' => __( 'Edit Category' ),
        'update_item' => __( 'Update Category' ),
        'add_new_item' => __( 'Add New Category' ),
        'new_item_name' => __( 'New Category Name' ),
        'menu_name' => __( 'Category' ),
    ),
        'show_ui' => true,
        'show_in_tag_cloud' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'Eventos/categories',
            'with_front' => false,

        ),
        )
    );
    /** 
     * Esta função associa tipos de categorias com tipos de posts.
     * Aqui associamos as tags ao tipo de post film.
     */
    register_taxonomy_for_object_type( 'tags', 'evento' );
}

















