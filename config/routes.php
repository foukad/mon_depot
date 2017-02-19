<?php 

/**
 * Used to define the routes in the system.
 * 
 * A route should be defined with a key matching the URL and an
 * controller#action-to-call method. E.g.:
 * 
 * '/' => 'index#index',
 * '/calendar' => 'calendar#index'
 */
$routes = array(
	'/films' => 'main#films',
	'/' => 'main#index',
	'/categories' => 'main#categories',
	'/add/categorie' => 'main#addcateg',
	'/add/film' => 'main#addfilm',
	'/film' => 'main#film',
	'/categorie-update' => 'main#categorie',
	'/updatecategorie' => 'ajax#categorieupdate',
	'/searchajaxparcategorie' => 'ajax#searchajaxparcategorie',
	'/inscription' => 'user#inscription',
	'/deconnexion' => 'user#deconnexion',
	'/login' => 'user#login',
    '/panier' => 'user#panier',
    '/ajaxpanier' => 'ajax#ajaxpanier',
    '/pdf' => 'user#pdf'
);
