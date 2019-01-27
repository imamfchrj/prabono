<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['laporkan-masalah-hukum'] = 'clients/form';
$route['client/kasus_aktif'] = 'clients/kasus_aktif';
$route['client/kasus_aktif/([a-z0-9]+)'] = 'clients/kasus_aktif_singgle/$1';
$route['register'] = 'clients_nl/register';
$route['login'] = 'clients_nl/login';

