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
$route['login/authenticate'] = 'auth/leaderauthcontroller/authenticate';
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
$route['user/dashboard'] = 'user/dashboard/index';
$route['user/learning-path'] = 'user/learningpath/index';

// leader
$route['leader/dashboard'] = 'leader/dashboard/index';
$route['leader/learning-path'] = 'leader/learningpath/index';
$route['leader/learning-path/add'] = 'leader/learningpath/add';
$route['leader/learning-path/edit'] = 'leader/learningpath/edit_learning_path';
$route['leader/quiz'] = 'leader/learningpath/quiz';
$route['leader/quiz/add'] = 'leader/learningpath/add_quiz';
$route['leader/quiz/edit'] = 'leader/learningpath/edit_quiz';
$route['leader/quiz/detail'] = 'leader/learningpath/detail_quiz';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
