<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['index'] = 'Home/index';
$route['about'] = 'Home/about';
$route['contact'] = 'Home/contact';
$route['blog'] = 'Home/blog';
$route['blogdetail'] = 'Home/blogdetail';
$route['newsdetail'] = 'Home/newsdetail';


// $route['blogdetail/(:any)'] = 'Home/blogdetail/$1';
$route['news'] = 'Home/news';
// $route['newsdetail/(:any)'] = 'Home/newsdetail/$1';

$route['career'] = 'Home/career';
$route['apply'] = 'Home/apply';
$route['product'] = 'Home/product';
$route['category'] = 'Home/category';



$route['delarship'] = 'Home/delarship';


