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

$route['checkPass/(:any)'] = 'checkPass/check/$1';
$route['editpages/contact'] = 'editpages/contact/view';
$route['editpages/product/remove/(:any)'] = 'editpages/product/remove/$1';
$route['editpages/project/remove/(:any)'] = 'editpages/project/remove/$1';
$route['editpages/product/edit/(:any)'] = 'editpages/product/edit/$1';
$route['editpages/project/edit/(:any)'] = 'editpages/project/edit/$1';
$route['editpages/projects'] = 'editpages/projects/view';
$route['editpages/products'] = 'editpages/products/view';
$route['editpages/about'] = 'editpages/about/view';
$route['editpages/home'] = 'editpages/home/view';
$route['admin/edit/(:any)'] = 'admin/edit/$1';
$route['admin/(:any)'] = 'admin/view/$1';
$route['admin'] = 'admin';
$route['collection/(:num)'] = 'collection/view/$1';
$route['collection/logout'] = 'collection/logout';
$route['collection'] = 'collection';
$route['products/(:any)'] = 'products/view/$1';
$route['products'] = 'products';
$route['projects/(:any)'] = 'projects/view/$1';
$route['projects'] = 'projects';
$route['about'] = 'about';
$route['contact-us'] = 'contact';
$route['getproducts'] = 'ProductItem/getproducts';
$route['uploadImages'] = 'ImageItem/uploadImages';
$route['default_controller'] = 'home/view';
$route['(:any)'] = 'home';
