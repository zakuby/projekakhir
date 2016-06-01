<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct(){
    parent::__construct();
    if(!$this->session->has_userdata('user'))
      redirect('user/login/', 'location');
    
    $this->load->model('home_model');
  }
  
  public function index() {
    $this->load->view('home');
    if($_POST['load']==true) {
      
    }
  }
  
  private function load9Post() {
    
  }
}
