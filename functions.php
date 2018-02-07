<?php

function render_header($user_params = [])
{
	$params = [
		'title' => PROJECT_TITLE,
		'is_home' => false,
		'menu_active_item' => 'home'
	];
	$params = array_merge($params, $user_params);

	include PATH_PARTIALS . 'header.php';
}

function render_footer()
{
	include PATH_PARTIALS . 'footer.php';
}