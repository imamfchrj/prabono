<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['laporkan-masalah-hukum'] = 'clients/form';
$route['client/kasus_aktif'] = 'clients/kasus_aktif';
$route['client/daftar_kasus'] = 'clients/kasus_aktif';
$route['client/kasus_aktif/([a-z0-9]+)'] = 'clients/kasus_aktif_singgle/$1';
$route['client/logout'] = 'clients/logout';
$route['daftar-user'] = 'clients_nl/register';
$route['daftar-advokat'] = 'clients_nl/register_advokat';
$route['([a-z0-9]+)/daftar-info'] = 'clients_nl/register_info/$1';
$route['login'] = 'clients_nl/login';




