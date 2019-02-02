<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['tentangkami'] = 'dashboard/aboutus';
$route['jasa'] = 'dashboard/services';
$route['publikasi'] = 'dashboard/publication';
$route['bergabung'] = 'dashboard/joinus';
$route['team'] = 'dashboard/team';
$route['berita'] = 'dashboard/news';
$route['berita/([a-z0-9]+)'] = 'dashboard/news_singgle/$1';

$route['syarat-dan-ketentuan'] = 'dashboard/syarat';