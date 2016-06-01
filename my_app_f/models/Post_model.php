<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {
  
  public function getPostList($n){
    $this->db->select('p.postid, p.userid, p.photo_url, p.caption, u.nama');
    $this->db->where('username', $user);
    $query = $this->db->get('user');
  }
}

