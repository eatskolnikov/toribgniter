<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('example_model');
	}
	public function index(){
		$this->load->template('example/index', array("who"=>"world"))
	}
}
