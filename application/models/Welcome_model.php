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

		$banner_title = $this->input->post('title');
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

	public function create_video()
	{
		$this->load->helper('url');
		$playback_title = $this->input->post('title');
		$playback_content = $this->input->post('content');
		$playback_status = $this->input->post('status');
		$playback_reg = $this->input->post('register');
		$data = array(
			'playback_title' => $playback_title,
			'playback_content' => $playback_content,
			'playback_status' => $playback_status,
			'playback_reg' => $playback_reg
			);
		return $this->db->insert('data_playback', $data);
	}

	public function create_slide()
	{
		$this->load->helper('url');

		$slide_title = $this->input->post('title');
		$slide_status = $this->input->post('status');
		$slide_reg = $this->input->post('register');

		$this->do_upload_image($slide_title,$slide_status,$slide_reg);

	}

	public function submit()
	{

	}

	public function do_upload_image($title = null, $status = null, $reg = null) 
	{
		$type = explode('.', $_FILES["pic"]["name"]);
		$type = $type[count($type)-1];
		$link = "./assets/images/".$_FILES["pic"]["name"];
		if(in_array($type, array("jpg", "jpeg", "gif", "png")));
		if(is_uploaded_file($_FILES["pic"]["tmp_name"])) {
			$data = array(
				'slide_content' => $_FILES["pic"]["name"],  
				'slide_title' => $title,
				'slide_status' => $status,
				'slide_reg' => $reg
				);
			$this->db->insert('data_slide', $data);
			if(move_uploaded_file($_FILES["pic"]["tmp_name"], $link)) {
				return $link;
			}
		} else {  
			return "";
		} 
	}

///Saving the data///////
	public function create_notice()
	{
		$this->load->helper('url');

		$notice_title = $this->input->post('title');
		$notice_content = $this->input->post('content');
		$notice_status = $this->input->post('status');
		$notice_reg = $this->input->post('register');

		$data = array(
			'notice_title' => $notice_title,
			'notice_content' => $notice_content,
			'notice_status' => $notice_status,
			'notice_reg' => $notice_reg
			);

		return $this->db->insert('data_notice', $data);
	}

	public function create_message()
	{
		$this->load->helper('url');

		$message_title = $this->input->post('title');
		$message_content = $this->input->post('content');
		$message_status = $this->input->post('status');
		$message_reg = $this->input->post('register');

		$data = array(
			'message_title' => $message_title,
			'message_content' => $message_content,
			'message_status' => $message_status,
			'message_reg' => $message_reg
			);

		return $this->db->insert('data_message', $data);
	}



 ///this is get function to display on screen......///////////
	public function get_bannerview()
	{
		$query = $this->db->get('data_banner');
		return $query->result();
	}

	public function get_playbackview()
	{
		$this->db->select('*');
		$this->db->from('data_playback');

		$query = $this->db->get();
		return $query->result();
	}

	public function get_slideview()
	{
		$query = $this->db->get('data_slide');
		return $query->result();
	}

	public function get_noticeview()
	{


		$this->db->select('*');
		$this->db->from('data_notice');

		$query = $this->db->get();
		return $query->result();


	}

	public function get_messageview()
	{

		$this->db->select('*');
		$this->db->from('data_message');

		$query = $this->db->get();
		return $query->result();
	}

	public function get_projekdetail() //view data
	{

		$this->db->select('*');
		$this->db->from('data_notice');

       //Tambah join 2 table.,.,
		$query = $this->db->get();

		return $query->result();
	}

  	public function get_projekdetails() //view data
  	{

  		$this->db->select('*');
  		$this->db->from('data_message');

       //Tambah join 2 table.,.,
  		$query = $this->db->get();

  		return $query->result();
  	}

  	public function get_settings()
  	{
  		$this->db->select('*');
  		$this->db->from('signagesetting');

  		$query = $this->db->get();

  		return $query->result();
  	}

  	//
  }