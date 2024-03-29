<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';

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
$route['admin/leader/add'] = 'admin/leader/add_leader';
$route['admin/leader/create'] = 'admin/leader/create_leader';
$route['admin/leader/delete/(:num)'] = 'admin/leader/delete_leader/$1';
$route['admin/learning-path'] = 'admin/learningpath/index';
$route['admin/learning-path/add'] = 'admin/learningpath/add_learning_path';
$route['admin/learning-path/create'] = 'admin/learningpath/create_learning_path';
$route['admin/learning-path/edit/(:num)'] = 'admin/learningpath/edit_learning_path/$1';
$route['admin/learning-path/update/(:num)'] = 'admin/learningpath/update_learning_path/$1';
$route['admin/learning-path/delete/(:num)'] = 'admin/learningpath/delete_learning_path/$1';
$route['admin/member'] = 'admin/member/index';
$route['admin/member/add'] = 'admin/member/add_member';
$route['admin/member/create'] = 'admin/member/create_member';
$route['admin/member/delete/(:num)'] = 'admin/member/delete_member/$1';
$route['admin/quiz'] = 'admin/questions/index';
$route['admin/all-user'] = 'admin/user/index';

// user
$route['member/dashboard'] = 'user/dashboard/index';
$route['member/learning-path/detail/(:num)'] = 'user/learningpath/index/$1';
$route['member/learning-path/quiz/(:num)'] = 'user/learningpath/start_quiz/$1';
$route['member/learning-path/submit-quiz/(:num)'] = 'user/learningpath/submit_quiz/$1';
$route['member/learning-path/quiz/history'] = 'user/learningpath/history';
$route['member/learning-path/review/store'] = 'user/learningpath/create_review';

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
$route['leader/step'] = 'leader/step/index';
$route['leader/step/add'] = 'leader/step/add_step';
$route['leader/step/create'] = 'leader/step/create';
$route['leader/step/edit/(:num)'] = 'leader/step/edit_step/$1';
$route['leader/step/update/(:num)'] = 'leader/step/update_step/$1';
$route['leader/step/delete/(:num)'] = 'leader/step/delete_step/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
