<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  public function __construct(){
    parent::__construct();
    $this->load->library('encrypt');
  }

  public function login($userid, $pass){
    
    $this->db->select('userid, username, password, level, nama');
    $this->db->where('username', $user);
    
    $query = $this->db->get('user');
    
    if($query = $query->result_array()[0])
      if($pass == $this->encrypt->decode($query['password']) ) {
        $out = array {
          'userid' => query['userid'],
          'username' => query['username'],
          'level' => query['level'],
          'nama' => query['nama'],
        }
        return $out;
      }
    return 0;
  }
  
  public function update($userid, $bio){
    
    $data = array (
            'userid' => '$userid',
            'bio' => '$bio'
    );
    
    if(!$this->db->replace('user_bio', $data))
      if( !$this->db->set($data) && !$this->db->insert('user_bio') ) 
        return 0;
      
  }
  
  public function updatePhotoProfile($userid, $link){
    
    $data = array (
            'userid' => '$userid',
            'url' => '$link'
    );
    
    if(!$this->db->replace('user_photo_profile', $data))
      if( !$this->db->set($data) && !$this->db->insert('user_photo_profile') ) 
        return 0;
      
  }
  
  public function report($userid, $postid, $massage = null) { // not implemented yet
    
    $reportData = array (
            'userid' => '$userid',
            'postid' => '$postid'
    );
    
    $reportMess = array (
            'userid' => '$userid',
            'postid' => '$postid'
    );
    
    $this->db->trans_start();
    $this->db->trans_complete();
  }

  public function addFriend($userid1, $userid2) {
    
    $data = array (
            'userid1' => '$userid',
            'userid2' => '$userid'
    );
    
    if( !$this->db->set($data) && !$this->db->insert('friendship') ) 
      return 0;
  }
  
  public function accFriend($userid2, $userid1 ) {
    
    $data = array (
            'userid1' => '$userid',
            'userid2' => '$userid',
            'status' => 2;
    );
    
    if(!$this->db->replace('friendship', $data))
      return 0;
  }
  
  public function descUser($userid){
    
    $this->db->select('u.userid, u.username, u.nama, ub.bio, upp.url, f.status');
    $this->db->from('user u');
    $this->db->join('user_bio ub', 'u.userid' = 'ub.userid', 'left outer');
    $this->db->join('user_photo_profile upp', 'u.userid' = 'upp.userid', 'left outer');
    $this->db->join('friendship f', 'u.userid' = 'f.userid1', 'left outer');
    $this->db->join('friendship f2', 'u.userid' = 'f2.userid2', 'left outer');
    $this->db->where('userid', $userid);
    
    $query = $this->db->get();
    if($query = $query->result_array()[0])
      return $query;
    return 0;
  }
  
  
}

