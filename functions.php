<?php
//IM=nclusão do arquivo para Menu responsivo
require_once get_template_directory().'/inc/wp-bootstrap-navwalker.php';

// Carregamento de CSS e JS
function load_scripts(){
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js',array('jquery'),'4.3.1',true);
	wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'4.3.1','all');
	wp_enqueue_style('font','https://use.fontawesome.com/releases/v5.8.1/css/all.css',array(),'5.8.1','all');
  wp_enqueue_style('estilo',get_template_directory_uri().'/assets/css/estilo.css',array(),'1.0','all');
}

add_action('wp_enqueue_scripts', 'load_scripts');

// Registro de Menus
register_nav_menus(
	array(
		'main_menu'   => 'Main Menu',
		'footer_menu' => 'Footer Menu'
));

//Adicionar Logomarca Customizada
add_theme_support('custom-logo',array(
	'width' 		 => 270,
	'height' 		 => 90,
	'flex-width' => true,
));

//Adicionar a tag Title
add_theme_support('title-tag');

//Habilitar Imagens de Destaque
add_theme_support('post-thumbnails');

// Registro de Sidebars e Widgets
function curso_sidebars(){

	register_sidebar(
		array(
			'name' 					=> ('Social Icones'),
			'id' 						=> 'social-icons',
			'description' 	=> ('Adicione suas Redes Sociais aqui.'),
			'before_widget' => '<div class="text-right py-2">',
			'after_widget' 	=> '</div>',
	));

	register_sidebar(
		array(
			'name' 					=> ('Barra Lateral'),
			'id' 						=> 'sidebar-right',
			'description' 	=> ('Adicione widgets na Barra Lateral'),
			'before_widget' => '<div class="card my-3">',
			'after_widget' 	=> '</div></div>',
			'before_title' 	=> '<div class="card-header">',
			'after_title' 	=> '</div><div class="card-body card-list">'
	));

	register_sidebar(
		array(
			'name' 					=> ('Endereço Rodapé'),
			'id' 						=> 'footer-address',
			'description' 	=> ('Adicione suas informações de Endereço'),
			'before_widget' => '<div class="text-light">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h5 class="text-light"><i class="fas fa-envelope fa-2x mr-2 text-light"></i>',
			'after_title' 	=> '</h5>'
	));

	register_sidebar(
		array(
			'name' 					=> ('Pensamento Rodapé'),
			'id' 						=> 'footer-think',
			'description' 	=> ('Adicione seus pensamentos'),
			'before_widget' => '<div class="card-body text-light">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h5 class="text-light"><i class="fab fa-pagelines fa-2x mr-2 text-light"></i>',
			'after_title' 	=> '</h5>'
	));

	register_sidebar(
		array(
			'name' 					=> ('Formulário de Contato'),
			'id' 						=> 'contact',
			'description' 	=> ('Adicione o código do Formulário de contato com um campo de texto.'),
			'before_widget' => '<div class="py-4">',
			'after_widget' 	=> '</div>',
	));


}

add_action('widgets_init', 'curso_sidebars');