<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    
	public function register() {

	}
  
  public function login() {
    
    $user = 0;
    $this->load->model('user_model');
    
    if( !empty($_POST['username']) && !empty($_POST['password']) ) {
      $user = $this->user_model->login($_POST['username'],$_POST['password']);
    
      if($user) {
        $this->session->set_userdata('user',$user);
        redirect('/home/', 'location');
      } else {
        echo "wrong username or password";
      }
      
    } else
      echo "input username and password";
    $this->load->view('login');
  }
  
  public function logout($id) {
    
  }
  
  public function update($id) {
    
  }
  
  public function updatePhotoProfile($id) {
    
  }
  
  public function friend($id) {
    
  }
  
  public function notif($id) {
    
  }
  
  public function profile($id) {
    
  }
  
  public function getlist($jumlah, $keyword = null) {
    
  }
  
}
