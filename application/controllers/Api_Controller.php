<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Api_Controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		
		// if (isset($_SERVER['HTTP_ORIGIN'])){
		// 	header('Access-Control-Allow-Origin: '.$_SERVER['HTTP_ORIGIN']);
		// }
		// else{
		// 	header('Access-Control-Allow-Origin: https://firdasafridi.id');
		// }
		// header('Content-Type: application/json');
	}



}