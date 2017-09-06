<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['default_controller'] 		= 'shop/index';

$route['auth']						= 'AuthUser/index';
$route['account']					= 'AuthUser/create_account';
$route['access/denied'] 			= 'AuthUser/index';
$route['exit'] 						= 'AuthUser/sess_destroy';
$route['exit_session_other_device'] = 'AuthUser/exit_session_other_device';
$route['reset-key'] 				= 'AuthUser/validate_reset_key';
$route['reset-key/invalid-email'] 	= 'AuthUser/reset_key';
$route['reset-key/confirm-email'] 	= 'AuthUser/reset_key';
$route['restore-key/(:any)/(:num)'] = 'AuthUser/restore_key_validate/$1/$2';
$route['restore-key'] 				= 'AuthUser/restore_key_validate';
$route['confirmation-restore'] 		= 'AuthUser/confirmation_restore';
$route['validation/access'] 		= 'AuthUser/validate_access';

# Shop
$route['product/(:num)/(:any)']  = 'shop/product/$1/$2';
$route['shopping-cart']  = 'shop/shopping_cart';
$route['checkout']  	 = 'shop/checkout';
$route['category/(:num)/(:any)'] = 'shop/category/$1/$2';
$route['search'] 	  = 'shop/search';
$route['blog'] 		  = 'shop/blog';
$route['publication'] = 'shop/publication';
$route['contact'] 	  = 'shop/contact';

# Dashboard
$route['dashboard']   = 'dashboard/index';

$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;
