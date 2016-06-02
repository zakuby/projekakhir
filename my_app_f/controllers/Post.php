<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

  public function create() {
    $this->insert();
	}
public function loadPost() {
	$this->load->model('Post_model');
	$data = $this->Post_model->getPostList();
	$this->load->vars('posts', $data);
	$this->load->view('tambah_post');
}	
public function insert() {
	$this->load->database();
	$this->load->Model('Post_model');
	$this->post_model->create();
	redirect('Post/loadPost','refresh');	
}
  
  public function update() {
	$date = $this->input->post('date');
	$caption = $this->input->post('obat');
	$photo_url=$this->input->post('photo_url');
	$data = array(
		'date'=>$date,
		'caption'=>$caption,
		'photo_url'=>$photo_url
	);    
  }
	public function del($id) {
		$this->load->model('post_model');
		$this->model->del($id);
		redirect('Post/delete_post','refresh');
	}
	public function delete_post(){
		$this->load->model('post_model');
		$data = $this->Post_model->getPostList();
		$this->load->vars('posts', $data);
		$this->load->view('delete_post',$data);
	}  
  public function report($id) {
     $this->load->model('Post_model');
    if($this->post_model->reportPost($id))
      print_r($this->post_model->reportPost($id));
  }
  
  public function like($id) {
    $this->load->model('Post_model');
    if($this->post_model->likePost($id))
      print_r($this->post_model->likePost($id));
  }
  
  public function getlist($jumlah = 9, $keyword = null) {
    
  }
  
}
