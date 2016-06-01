<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    
	public function register() {
    if($this->session->has_userdata('user'))
      redirect('user/login/', 'location');
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
  
  public function logout() {
    $this->session->set_userdata('user',$user);
    redirect('user/login', 'location');
  }
  
  public function updateBio() {
    print_r($this->session->userdata('user'));
    
    if(!$id = $this->session->userdata('user')['userid'])
      redirect('user/login', 'location');
    
    if(!empty($_POST['bio'])) {
      
      $bio = $_POST['bio'];    
      $this->load->model('user_model');
      
      if($this->user_model->update($id,$bio))
        redirect('user', 'location');
      
      echo "Error update_user_xx49";
      
    } else {
      $this->load->view("update");
    }
  }

  
  public function updateProfile() {
    print_r($this->session->userdata('user'));
    
    if(!$id = $this->session->userdata('user')['userid'])
      redirect('user/login', 'location');
    
    if(!empty($_POST['profile'])) {
      
      $profile = array(
        'nama' = $_POST['nama'];    
        'ttl' = $_POST['ttl'];    
        'email' = $_POST['email'];
      );
      
      $this->load->model('user_model');
      
      if($this->user_model->updateProfile($id,$profile))
        redirect('user', 'location');
      
      echo "Error update_user_xx51";
      
    } else {
      $this->load->view("update");
    }
  }
  
  public function updatePhotoProfile() {
    
    if(!$id = $this->session->userdata('user')['userid'])
      redirect('user/login', 'location');
    
    if(!empty($_POST['photo'])) {
      $url = $_POST['photo'];    
      
      $this->load->model('user_model');
      
      if($this->user_model->updatePhotoProfile($id,$url))
        redirect('user', 'location');
      
      echo "Error update_photo_xx50";
      
    } else {
      $this->load->view("update");
    }
    
  }
  
  public function notif($id) {
    
  }
  
  public function profile($username) {
    
    $this->load->model('user_model');
    
    if($this->user_model->descUser($username))
      print_r($this->user_model->descUser($username));
    
  }
  
}
