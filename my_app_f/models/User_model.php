<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  public function __construct(){
    parent::__construct();
    $this->load->library('encrypt');
  }

  public function login($user, $pass){
    
    $this->db->select('username, password, level, nama');
    $this->db->where('username', $user);
    $query = $this->db->get('user');
    
    if($query = $query->result_array()[0])
      if($pass == $this->encrypt->decode($query['password']) )
        return $query;
    return 0;
  }
  
  public function update($id, $bio){
    $data = array (
            'userid' => '$id',
            'bio' => '$bio'
    );
    
    if(!$this->db->replace('user_bio', $data))
      if( !$this->db->set($array) && !$this->db->insert('mytable') ) 
        return 0;
    
  }

}

