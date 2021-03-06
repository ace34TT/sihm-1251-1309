<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

//utilisateur
$route['default_controller'] = 'utilisateur';
$route['utilisateur/listeProduit']['get'] = 'utilisateur/listeProduit';
$route['utilisateur/caisse/(:any)']['get'] = 'utilisateur/caisse/$1';
$route['utilisateur/produitSelectionne']['post'] = 'utilisateur/produitSelectionne';
$route['utilisateur/validerAchat']['post'] = 'utilisateur/validerAchat';
$route['utilisateur/produitParCategorie']['get'] = 'utilisateur/produitParCategorie';

//admin
$route['admin/login']['get'] = 'admin/loginForm';
$route['admin/login']['post'] = 'admin/login';
$route['admin/dashboard']['get'] = 'admin/dashboard';

//categorie
$route['admin/categorie/form']['get'] = 'categorie/form';
$route['admin/categorie/form']['post'] = 'categorie/insert';
$route['admin/categorie/delete/(:any)']['get'] = 'categorie/delete/$1';

//caisse
$route['admin/caisse/form']['get'] = 'caisse/form';
$route['admin/caisse/form']['post'] = 'caisse/insert';
$route['admin/caisse/delete/(:any)']['get'] = 'caisse/delete/$1';

//produit
$route['admin/produit/form']['get'] = 'produit/form';
$route['admin/produit/form']['post'] = 'produit/insert';
$route['admin/produit/delete/(:any)']['get'] = 'produit/delete/$1';


//factures
$route['admin/facture/form']['get'] = 'facture/form';
$route['admin/facture/form']['post'] = 'facture/insert';
$route['admin/facture/delete/(:any)']['get'] = 'facture/delete/$1';

//achatProduits
$route['admin/achatProduit/form']['get'] = 'achatProduit/form';
$route['admin/achatProduit/form']['post'] = 'achatProduit/insert';
$route['admin/achatProduit/delete/(:any)']['get'] = 'achatProduit/delete/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
