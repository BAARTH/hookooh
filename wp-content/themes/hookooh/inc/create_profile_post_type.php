<?php
	function ajout_custom_type_profil(){
		$post_type = "profil";
	$labels = array(
        'name'               => 'Profils',
        'singular_name'      => 'Profil',
        'all_items'          => 'Tout les profils',
        'add_new'            => 'Ajouter un profil',
        'add_new_item'       => 'Ajouter un nouveau profil',
        'edit_item'          => "Modifier le profil",
        'new_item'           => 'Nouveau profil',
        'view_item'          => "Voir le profil",
        'search_items'       => 'Find a model',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Profil parent',
        'menu_name'          => 'Profils',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'revisions', 'page-attributes', 'post-formats' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-groups',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );

    // Genre
    $taxonomy = "genre";
    $object_type = array('profil');
    $args = array(
          'label' => __( 'Genre' ),
          'rewrite' => array( 'slug' => 'genre' ),
          'hierarchical' => false,
    );
	register_taxonomy( $taxonomy, $object_type, $args ); 

    // Age
    $taxonomy = "age";
    $object_type = array('profil');
    $args = array(
          'label' => __( 'Age' ),
          'rewrite' => array( 'slug' => 'age' ),
          'hierarchical' => false,
    );
    register_taxonomy( $taxonomy, $object_type, $args );

}

add_action('init', 'ajout_custom_type_profil');