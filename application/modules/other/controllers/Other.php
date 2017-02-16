<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Other extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $data = array();
		$data['title'] = "Other Pages";
		$this->load->view('other', $data);
    }
}