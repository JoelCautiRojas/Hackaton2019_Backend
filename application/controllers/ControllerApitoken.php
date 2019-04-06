<?php 
/**
 * 
 */
class ControllerApitoken extends CI_Controller
{

	private $url_base = "http://programadoresperuanos.com/hackathon/";
	private $url_imagen = "resources/tokens/";
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
		$this->load->model("Token_model");
		$registros_tokens = $this->Token_model->getTokens();
		if($registros_tokens->num_rows() > 0){
			$matriz = $registros_tokens->result_array();
			$numero = random_int(0, count($matriz)-1);
			$this->formatOutputJSONToken($this->url_base.$this->url_imagen.$matriz[$numero]["imagen"]);
		}
	}

	public function formatOutputJSONToken($url){
		$json = array("status" => "success",
						"data" => array(
							"url" => $url
						),
						"error" => array());
		echo json_encode($json,JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
	}
}

 ?>