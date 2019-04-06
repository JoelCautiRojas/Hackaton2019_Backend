<?php 
/**
 * 
 */
class ControllerApitoken extends CI_Controller
{

	/*
	|
	|
	|
	*/
	function __construct()
	{
		parent::__construct();
	}

	public function getToken(){
		echo json_encode("Hola amigo");
	}
}

 ?>