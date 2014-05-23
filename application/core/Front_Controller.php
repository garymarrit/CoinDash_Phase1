<?php
class Front_Controller extends CI_Controller {
	//Site global layout
	public $layout_view = 'front/default_template/default';

	function __construct() {
		parent::__construct();

		//Layout library loaded site wide
		$this->load->library('layout'); 
	}
}