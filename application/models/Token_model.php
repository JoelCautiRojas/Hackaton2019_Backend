<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Token_model extends CI_Model
{
	
	/*
	|
	|
	|
	*/
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	/*
	|
	|
	|
	|
	*/
	public function getTokens(){
		return $this->db->get('tokens');
	}
}

