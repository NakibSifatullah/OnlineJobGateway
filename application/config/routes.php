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

$route['jobs'] = 'Pages/all_jobs';
$route['post-jobs'] = 'Pages/post_jobs';
$route['company-profiles'] = 'Pages/company_profiles';
$route['users-profiles'] = 'Pages/users_profiles';
$route['jobs-details'] = 'Pages/jobs_details';
$route['jobs-categories'] = 'Pages/jobs_category';
$route['categories-job'] = 'Pages/categories_job';
$route['about-us'] = 'Pages/about_us';
$route['contact-us'] = 'Pages/contact_us';
$route['user-register'] = 'Pages/register';
$route['company-register'] = 'Pages/company_register';
$route['user-login'] = 'Pages/login_user';
$route['company-login'] = 'Pages/company_login';
$route['log-out'] = 'Pages/logout_user';
$route['apply-job'] = 'Pages/apply_job';


$route['admin'] = 'Pages/admin_panel';
$route['login'] = 'Pages/login';
$route['add-category'] = 'Pages/add_category';
$route['view-category'] = 'Pages/view_category';
$route['add-jobs'] = 'Pages/add_jobs';
$route['edit-job'] = 'Pages/edit_jobs';
$route['view-jobs'] = 'Pages/view_jobs';
$route['add-admin'] = 'Pages/add_admin';
$route['view-admin'] = 'Pages/view_admin';
$route['edit-category'] = 'Pages/edit_category';
$route['delete-category'] = 'Admin/delete_category';
$route['save-admin'] = 'Admin/save_admin';
$route['update-admin'] = 'Admin/update_admin';
$route['delete-admin'] = 'Admin/delete_admin';
$route['edit-admin'] = 'Pages/edit_admin';
$route['admin-login'] = 'Admin/admin_login';
$route['logout'] = 'Admin/logout';
$route['create-jobs'] = 'Admin/create_jobs';
$route['delete-job'] = 'Admin/delete_jobs';
$route['update-job'] = 'Admin/update_jobs';
$route['contact-mail'] = 'Pages/contacts_mail';
$route['applied-job'] = 'Pages/applied_job';


$route['default_controller'] = 'Pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
