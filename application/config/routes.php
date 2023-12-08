<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['abouts'] = 'Welcome/about';
$route['test'] = 'TestController/aboutus';
$route['home'] = 'TestController/home';
$route['contact'] = 'TestController/contact';
$route['blog/(:any)'] = 'TestController/blog/$1';
$route['student'] = 'StudentController/index';
$route['Test'] = 'TestController/testing';

$route['blog/(:any)']= 'PageController/blog/$1';

// ------------------------------------------------------------
// CRUD
$route['employee'] = "Frontend/EmployeeController/index";
$route['employee/add'] = "Frontend/EmployeeController/create";
$route['employee/store'] = "Frontend/EmployeeController/store";
$route['employee/edit/(:any)'] = "Frontend/EmployeeController/edit/$1";
$route['employee/update/(:any)'] = "Frontend/EmployeeController/update/$1";
$route['employee/delete/(:any)'] = "Frontend/EmployeeController/delete/$1";