<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct(){
    parent::__construct();
    if(!$this->session->has_userdata('user'))
      redirect('user/login/', 'location');
    
  }
  
  public function index() {
    $this->load->view('home');
    print_r($this->session->userdata('user'));
  }
  
  private function load9Post() {
    
  }
}
