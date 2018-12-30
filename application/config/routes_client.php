<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['laporkan-masalah-hukum'] = 'clients_not_login/form';
$route['client/kasus_aktif'] = 'clients_not_login/kasus_aktif';
$route['client/kasus_aktif/([a-z0-9]+)'] = 'clients_not_login/kasus_aktif_singgle/$1';

