<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 220, true);

function my_pagination_rewrite()
{
	add_rewrite_rule('blog/page/?([0-9]{1,})/?$', 'index.php?category_name=blog&paged=$matches[1]', 'top');
}
add_action('init', 'my_pagination_rewrite');
function register_my_menu()
{
	register_nav_menu('header-menu', __('Header Menu'));
	register_nav_menu('footer-menu', __('Footer Menu'));
}
add_action('init', 'register_my_menu');
register_sidebar(
	array(
		'name' => 'busca',
		'id' => 'busca',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '',
	)
);

function cmb2_fields_add()
{
	$cmb = new_cmb2_box([
		'id' => 'componentes_box', // id deve ser único
		'title' => 'Componentes',
		'object_types' => ['page'], // tipo de post
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-componentes.php',
		], // modelo de página
	]);


	// O campo repetidor é do tipo group
	$Membro = $cmb->add_field([
		'name' => 'Componente',
		'id' => 'Componente',
		'type' => 'group',
		'repeatable' => true,
		'options' => [
			'group_title' => 'Componente {#}',
			'add_button' => 'Adicionar',
			'remove_button' => 'Remover',
			'sortable' => true,
		],
	]);

	// Cada campo é adicionado com add_group_field
	// Passando sempre o campo de grupo como primeiro argumento
	$cmb->add_group_field($Membro, [
		'name' => 'imagem',
		'id' => 'imagem',
		'type' => 'file',
	]);

	$cmb->add_group_field($Membro, [
		'name' => 'Nome',
		'id' => 'nome',
		'type' => 'text',
	]);

	$cmb->add_group_field($Membro, [
		'name' => 'Função',
		'id' => 'funcao',
		'type' => 'text',
	]);

	$cmb->add_group_field($Membro, [
		'name' => 'Descrição',
		'id' => 'descricao',
		'type' => 'text',
	]);
	$cmb->add_group_field($Membro, [
		'name' => 'Link',
		'id' => 'link',
		'type' => 'text_url',
	]);
}
add_action('cmb2_admin_init', 'cmb2_fields_add');

// custom post type
function custom_post_type_eventos()
{
	register_post_type('eventos', array(
		'label' => 'Eventos',
		'description' => 'Eventos',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'eventos', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes', 'post-formats'),

		'labels' => array(
			'name' => 'Eventos',
			'singular_name' => 'Evento',
			'menu_name' => 'Eventos',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Evento',
			'edit' => 'Editar',
			'edit_item' => 'Editar evento',
			'new_item' => 'Novo evento',
			'view' => 'Ver eventos',
			'view_item' => 'Ver evento',
			'search_items' => 'Procurar Eventos',
			'not_found' => 'Nenhum Evento Encontrado',
			'not_found_in_trash' => 'Nenhum Evento Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_eventos');
