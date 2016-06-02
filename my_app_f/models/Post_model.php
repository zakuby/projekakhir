<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {
  
  public function getPostList($n){
    $this->db->select('p.postid, p.userid, p.photo_url, p.caption, u.nama');
    $this->db->where('username', $user);
    $query = $this->db->get('user');
	return $query->result();
  }
  public function create(){
		$data = array('date'=>$this->input->post('Tahun')."-".$this->input->post('Bulan')."-".$this->input->post('Hari') ,
						  'photo_url'=>$this->input->post('photo_url'),
						  'userid'=>$this->input->post('userid'),
						  'caption'=>$this->input->post('caption')
						  );
		$this->db->insert('post',$data);
	}
  function delete($id) {
		$this->db->where('postid',$id);
		return $this->db->delete('post');
  }
  public function update($data, $id){
		$this->db->where('postid', $id);
		$this->db->update('post',$data);
  }
  public function reportPost($id){
    $this->db->select('reportid, r.userid, r.postid, date');
    $this->db->from('report r');
    $this->db->join('user u', 'r.userid = u.userid', 'left outer');
    $this->db->join('post p', 'r.postid = p.post.id', 'left outer');
	
    $query = $this->db->get();
    if($query = $query->result_array())
      return $query;
    return 0;
 }		
  public function likePost($id){
    
    $this->db->select('postid, l.userid, date');
    $this->db->from('report r');
    $this->db->join('user u', 'l.userid = u.userid', 'left outer');
	
    $query = $this->db->get();
    if($query = $query->result_array())
      return $query;
    return 0;
  }		  
}

