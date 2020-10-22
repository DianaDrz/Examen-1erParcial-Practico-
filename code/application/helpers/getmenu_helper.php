<?php
function main_menu(){
	return array(
		array(
			'title'=>'login',
			'url'=>base_url(),
		),
		array(
			'title'=>'bienvenida',
			'url'=>base_url('/bienvenida'),
		),

	);
}
