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
|	https://codeigniter.com/userguide3/general/routing.html
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

// auth user
$route['login'] = 'auth/userauthcontroller/index';
$route['login/authenticate'] = 'auth/userauthcontroller/authenticate';
$route['user/logout'] = 'auth/userauthcontroller/logout';

// auth leader
$route['login-leader'] = 'auth/leaderauthcontroller/index';
$route['login/leader/authenticate'] = 'auth/leaderauthcontroller/authenticate';
$route['leader/logout'] = 'auth/leaderauthcontroller/logout';

// auth admin
$route['back-login'] = 'auth/adminauthcontroller/index';
$route['back-login/authenticate'] = 'auth/adminauthcontroller/authenticate';
$roite['admin/logout'] = 'auth/adminauthcontroller/logout';

// admin
$route['admin/dashboard'] = 'admin/dashboard/index';
$route['admin/leader'] = 'admin/leader/index';
$route['admin/learning-path'] = 'admin/learningpath/index';
$route['admin/learning-path/add'] = 'admin/learningpath/add';
$route['admin/learning-path/edit'] = 'admin/learningpath/edit';
$route['admin/member'] = 'admin/member/index';
$route['admin/quiz'] = 'admin/questions/index';
$route['admin/all-user'] = 'admin/user/index';

// user
$route['member/dashboard'] = 'user/dashboard/index';
$route['member/learning-path/detail/(:num)'] = 'user/learningpath/index/$1';
$route['member/learning-path/quiz'] = 'user/learningpath/start_quiz';
$route['member/learning-path/video'] = 'user/learningpath/view_video';

// leader
$route['leader/dashboard'] = 'leader/dashboard/index';
$route['leader/learning-path'] = 'leader/learningpath/index';
$route['leader/learning-path/add'] = 'leader/learningpath/add';
$route['leader/learning-path/create'] = 'leader/learningpath/create';
$route['leader/learning-path/edit/(:num)'] = 'leader/learningpath/edit_learning_path/$1';
$route['leader/learning-path/update/(:num)'] = 'leader/learningpath/update_learning_path/$1';
$route['leader/learning-path/delete/(:num)'] = 'leader/learningpath/delete_learning_path/$1';
$route['leader/quiz'] = 'leader/quiz/quiz';
$route['leader/quiz/add'] = 'leader/quiz/add_quiz';
$route['leader/quiz/create'] = 'leader/quiz/create';
$route['leader/quiz/detail/(:num)'] = 'leader/quiz/detail_quiz/$1';
$route['leader/quiz/edit/(:num)'] = 'leader/quiz/edit_quiz/$1';
$route['leader/quiz/update/(:num)'] = 'leader/quiz/update_quiz/$1';
$route['leader/quiz/delete/(:num)'] = 'leader/quiz/delete_quiz/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
