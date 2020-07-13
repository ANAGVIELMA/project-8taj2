<?php
add_action( 'init', 'crearPlatillo', 0 );
if ( ! function_exists('crearPlatillo') ) {

    // Register Custom Post Type
    function crearPlatillo() {
    
        $labels = array(
            'name'                  => 'Platillos',
            'singular_name'         => 'Platillo',
            'menu_name'             => 'Comidas',
            'name_admin_bar'        => 'Comidas',
            'archives'              => 'Archivos',
            'attributes'            => 'Atributos',
            'parent_item_colon'     => 'Platillo Padre:',
            'all_items'             => 'Todos los Platillos',
            'add_new_item'          => 'Agregar Nuevo Platillo',
            'add_new'               => 'Añadir Nuevo',
            'new_item'              => 'Nuevo Platillo',
            'edit_item'             => 'Editar Platillo',
            'update_item'           => 'Actualizar Platillo',
            'view_item'             => 'Ver Platillo',
            'view_items'            => 'Ver Platillos',
            'search_items'          => 'Buscar Platillos',
            'not_found'             => 'No Encontrado',
            'not_found_in_trash'    => 'No Encontrado en Papelera',
            'featured_image'        => 'Imagen Destacada',
            'set_featured_image'    => 'Establecer Imagen Destacada',
            'remove_featured_image' => 'Remover Imagen Destacada',
            'use_featured_image'    => 'Usar como Imagen Destacada',
            'insert_into_item'      => 'Insertar en el Platillo',
            'uploaded_to_this_item' => 'Actualizar este Platillo',
            'items_list'            => 'Lista de Platillos',
            'items_list_navigation' => 'Lista Navegable de Platillos',
            'filter_items_list'     => 'Filtro de Lista de Platillos',
        );
        $args = array(
            'label'                 => 'Platillos',
            'description'           => 'Personalización de entradas de Comidas personalizadas',
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'post-formats' ),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 20,
            'menu_icon'             => 'dashicons-carrot',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
            'rewrite'               =>  array( 'slug' => 'Platillos' ),
            'query_var'             => true
        );
        register_post_type( 'Platillos', $args );
    
    }
    
    
    }

add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

function add_my_post_types_to_query( $query ) {
	if ( (is_single() || is_home() || is_category() ) && $query->is_main_query() )
		$query->set( 'post_type', array( 'post', 'Platillo' ) );

	return $query;
}