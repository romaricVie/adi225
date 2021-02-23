<?php
// Fonction permettant de gerer le titre des pages
if(!function_exists('page_title')){
	function page_title($title){
		$base_title = config('app.name').' - Agence Digitale Ivoirienne';
		return empty($title) ? $base_title : $title.' | '.$base_title;
		
	}
}

/*
*
* Function permettant de gerer le lien actif des pages!
@return string
*/
if(!function_exists('set_active_route')){
	function set_active_route($route){
		 return Route::is($route) ? 'active' : '';
	}

}