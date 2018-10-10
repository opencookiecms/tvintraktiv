<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
 class Welcome_model extends CI_Model
 {
 	
 	public function __construct()
 	{
 		# code...
 		$this->load->database();
 	}

 	public function create_banner()

 	{
 		$this->load->helper('url');

 		$banner_title = $this->input->post("title");
 		$banner_content = $this->input->post('content');
 		$banner_status = $this->input->post('status');
 		$banner_reg = $this->input->post('register');

 		$data = array(
 			'banner_title' => $banner_title,
 			'banner_content' => $banner_content,
 			'banner_status' => $banner_status,
 			'banner_reg' => $banner_reg
 			);

 		return $this->db->insert('data_banner', $data);
 	}

 	public function getLastid()
 	{
 		$lastId = $this->db->select('id')->order_by('id','desc')->limit(1)->get('data_banner')->row('id');

    return $lastId; //return last id
	}

	public function get_bannerview()
	{
		$query = $this->db->get('data_banner');
		return $query->result();
	}


 } 















 ?>