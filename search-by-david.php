<?php
/*
Plugin Name: Search by David
Plugin URI: http://davidgaitan.com/search-by-david
Description: A simple search that help to search by tags or categories
Author: David Gaitan
Author URI: http://davidgaitan.com
Version: 1.0.0
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// Add Shortcode
function generate_form_david( $atts ) {


	$datos = array( 'category' => '', 'tag' => '' , 'post_type' => '','author' => '','placeholder' => 'Buscar...');

	$make_shortcode = shortcode_atts($datos,$atts);

	extract($make_shortcode);


	// Code
	return make_form_david($category,$tag,$post_type,$author,$placeholder);
	
}
add_shortcode( 'search_by_david', 'generate_form_david' );

function myplugin_scripts() {
    /*add the css*/
    wp_register_style( 'styles',  plugin_dir_url( __FILE__ ) . 'styles.css' );
    wp_enqueue_style( 'styles' );

}
add_action( 'wp_enqueue_scripts', 'myplugin_scripts' );

function make_form_david($category,$tag,$post_type,$author,$placeholder){


	$mensaje = '';

	if ( empty($category) AND empty($tag) AND empty($post_type) AND empty($author) ){

		$mensaje = '<div class="alert-search"><p>Debe asignar un parametro de busqueda, ejemplo: [search_by_david category="mi-categoria"]</p></div>';
		return $mensaje;

	}elseif(!empty($category) AND empty($tag) AND empty($post_type) AND empty($author)){

		?>
		<form action="<?php echo esc_html(home_url()); ?>" method="get" class="search-by-david">
			<input type="search" name="s" class="s" id="s" placeholder="<?php echo $placeholder; ?>">
			<input type="hidden" name="category_name" value="<?php echo $category; ?>">
		</form>
		<?php

	}elseif ( empty($category) AND !empty($tag) AND empty($post_type) AND empty($author) ){

		?>
		<form action="<?php echo esc_html(home_url()); ?>" method="get" class="search-by-david">
			<input type="search" name="s" class="s" id="s" placeholder="<?php echo $placeholder; ?>">
			<input type="hidden" name="tag" value="<?php echo $tag; ?>">
		</form>
		<?php

	}elseif ( empty($category) AND empty($tag) AND !empty($post_type) AND empty($author) ){

		?>
		<form action="<?php echo esc_html(home_url()); ?>" method="get" class="search-by-david">
			<input type="search" name="s" class="s" id="s" placeholder="<?php echo $placeholder; ?>">
			<input type="hidden" name="post_type" value="<?php echo $post_type; ?>">
		</form>
		<?php

	}elseif ( empty($category) AND empty($tag) AND empty($post_type) AND !empty($author) ) {
		
		?>
		<form action="<?php echo esc_html(home_url()); ?>" method="get" class="search-by-david">
			<input type="search" name="s" class="s" id="s" placeholder="<?php echo $placeholder; ?>">
			<input type="hidden" name="author" value="<?php echo $author; ?>">
		</form>
		<?php		

	}elseif ( empty($category) AND empty($tag) AND !empty($post_type) AND !empty($author) ) {
		
		?>
		<form action="<?php echo esc_html(home_url()); ?>" method="get" class="search-by-david">
			<input type="search" name="s" class="s" id="s" placeholder="<?php echo $placeholder; ?>">
			<input type="hidden" name="author" value="<?php echo $author; ?>">
			<input type="hidden" name="post_type" value="<?php echo $post_type; ?>">
		</form>
		<?php		

	}elseif ( empty($category) AND !empty($tag) AND !empty($post_type) AND !empty($author) ) {
		
		?>
		<form action="<?php echo esc_html(home_url()); ?>" method="get" class="search-by-david">
			<input type="search" name="s" class="s" id="s" placeholder="<?php echo $placeholder; ?>">
			<input type="hidden" name="author" value="<?php echo $author; ?>">
			<input type="hidden" name="post_type" value="<?php echo $post_type; ?>">
			<input type="hidden" name="tag" value="<?php echo $tag; ?>">
		</form>
		<?php		

	}elseif ( !empty($category) AND !empty($tag) AND !empty($post_type) AND !empty($author) ) {
		
		?>
		<form action="<?php echo esc_html(home_url()); ?>" method="get" class="search-by-david">
			<input type="search" name="s" class="s" id="s" placeholder="<?php echo $placeholder; ?>">
			<input type="hidden" name="author" value="<?php echo $author; ?>">
			<input type="hidden" name="post_type" value="<?php echo $post_type; ?>">
			<input type="hidden" name="tag" value="<?php echo $tag; ?>">
			<input type="hidden" name="category_name" value="<?php echo $category; ?>">
		</form>
		<?php		

	}elseif ( !empty($category) AND empty($tag) AND !empty($post_type) AND !empty($author) ) {
		
		?>
		<form action="<?php echo esc_html(home_url()); ?>" method="get" class="search-by-david">
			<input type="search" name="s" class="s" id="s" placeholder="<?php echo $placeholder; ?>">
			<input type="hidden" name="author" value="<?php echo $author; ?>">
			<input type="hidden" name="post_type" value="<?php echo $post_type; ?>">
			<input type="hidden" name="category_name" value="<?php echo $category; ?>">
		</form>
		<?php		

	}elseif ( !empty($category) AND !empty($tag) AND empty($post_type) AND !empty($author) ) {
		
		?>
		<form action="<?php echo esc_html(home_url()); ?>" method="get" class="search-by-david">
			<input type="search" name="s" class="s" id="s" placeholder="<?php echo $placeholder; ?>">
			<input type="hidden" name="author" value="<?php echo $author; ?>">
			<input type="hidden" name="tag" value="<?php echo $tag; ?>">
			<input type="hidden" name="category_name" value="<?php echo $category; ?>">
		</form>
		<?php		

	}elseif ( !empty($category) AND !empty($tag) AND !empty($post_type) AND empty($author) ) {
		
		?>
		<form action="<?php echo esc_html(home_url()); ?>" method="get" class="search-by-david">
			<input type="search" name="s" class="s" id="s" placeholder="<?php echo $placeholder; ?>">
			<input type="hidden" name="post_type" value="<?php echo $post_type; ?>">
			<input type="hidden" name="tag" value="<?php echo $tag; ?>">
			<input type="hidden" name="category_name" value="<?php echo $category; ?>">
		</form>
		<?php		

	}elseif ( !empty($category) AND !empty($tag) AND empty($post_type) AND !empty($author) ) {
		
		?>
		<form action="<?php echo esc_html(home_url()); ?>" method="get" class="search-by-david">
			<input type="search" name="s" class="s" id="s" placeholder="<?php echo $placeholder; ?>">
			<input type="hidden" name="author" value="<?php echo $author; ?>">
			<input type="hidden" name="tag" value="<?php echo $tag; ?>">
			<input type="hidden" name="category_name" value="<?php echo $category; ?>">
		</form>
		<?php		

	}elseif ( !empty($category) AND !empty($tag) AND !empty($post_type) AND !empty($author) ) {
		
		?>
		<form action="<?php echo esc_html(home_url()); ?>" method="get" class="search-by-david">
			<input type="search" name="s" class="s" id="s" placeholder="<?php echo $placeholder; ?>">
			<input type="hidden" name="author" value="<?php echo $author; ?>">
			<input type="hidden" name="post_type" value="<?php echo $post_type; ?>">
			<input type="hidden" name="tag" value="<?php echo $tag; ?>">
			<input type="hidden" name="category_name" value="<?php echo $category; ?>">
		</form>
		<?php		

	}else{

		$mensaje = '<div class="alert-search"><p>Ocurrió un error de asignación de paramentros, el error es del plugin :(</p></div>';
		return $mensaje;

	}

}
