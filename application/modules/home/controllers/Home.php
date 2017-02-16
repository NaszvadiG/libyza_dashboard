<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
		$data = array();
		$data['title'] = "Home Header";
		$this->load->view('home', $data);
    }
}