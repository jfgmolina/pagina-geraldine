<?php

function css_jss_in_page(){
    wp_enqueue_style( 'css_info', get_stylesheet_uri(), array(), '1.0.0' );
    //bootstrap css
    wp_enqueue_style( 'bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css', array(), '5.0.0' );
    //google font
    wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), '2.0.0' );
    //estilos personales
    wp_enqueue_style( 'personal_css', get_template_directory_uri(  ).'/public/css/styles.css', array('bootstrap_css'), '1.0.0' );
    //bootstrap js
    wp_enqueue_script( 'bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', array(), '5.0.0', true );
    //script personales
    //wp_enqueue_script( 'personal_js', get_template_directory_uri(  ).'/public/js/script.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'css_jss_in_page');

/*************************************
 se ejecuta cuando el tema es activado 
**************************************/
function susi_inicio(){
    //soporte para los titulos dinamicos
    add_theme_support( 'title-tag' );
    //habilitar imagenes destacadas
    add_theme_support('post-thumbnails');
    //crear tamaños personalizados de imagenes
    add_image_size('cuadrada',600,600,true);
}
add_action('after_setup_theme', 'susi_inicio');

/****************************************
 * creación del post type caracteristicas
 */
function susi_caracteristicas_post_type() {
    $labels = array(
        'name'                  => _x( 'Caracteristicas', 'Post Type General Name'),
        'singular_name'         => _x( 'Caracteristica', 'Post Type Singular Name'),
        'menu_name'             => __( 'Caracteristicas' ),
        'name_admin_bar'        => __( 'Caracteristica' ),
        'archives'              => __( 'Archivo' ),
        'attributes'            => __( 'Atributos' ),
        'parent_item_colon'     => __( 'Categoría Superior' ),
        'all_items'             => __( 'Todos las Caracteristicass' ),
        'add_new'               => __( 'Agregar Caracteristica' ),
        'add_new_item'          => __( 'Agregar Caracteristica' ),
        'new_item'              => __( 'Nueva Caracteristica' ),
        'edit_item'             => __( 'Editar Caracteristica' ),
        'update_item'           => __( 'Actualizar Caracteristica' ),
        'view_item'             => __( 'Ver Caracteristica' ),
        'view_items'            => __( 'Ver Caracteristicas' ),
        'search_items'          => __( 'Buscar Caracteristicas' ),
        'not_found'             => __( 'No Encontrado' ),
        'not_found_in_trash'    => __( 'No Encontrado en Papelera' ),
        'featured_image'        => __( 'Imagen Destacada' ),
        'set_featured_image'    => __( 'Guardar Imagen destacada' ),
        'remove_featured_image' => __( 'Eliminar Imagen destacada' ),
        'use_featured_image'    => __( 'Utilizar como Imagen Destacada', ),
        'items_list'            => __( 'Lista de Caracteristicas' ),
        'items_list_navigation' => __( 'Navegación de Caracteristicas' ),
        'filter_items_list'     => __( 'Filtrar Caracteristicas' ),
    );
    $args = array(
        'label'                 => __( 'Caracteristica' ),
        'description'           => __( 'Listado de Caracteristicas' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail','custom_fields' ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => array('slug' => 'caracteristicas'),
        'taxonomies' => array( 'post_tag', 'category'),
    );
    register_post_type( 'susi_caracteristicas', $args );
}
add_action( 'init', 'susi_caracteristicas_post_type', 0 );