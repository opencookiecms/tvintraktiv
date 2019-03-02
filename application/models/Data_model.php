<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class Data_model extends CI_Model
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
		$banner_status = $this->input->post('status');
		$banner_reg = $this->input->post('reg');

		$this->do_upload_banner($banner_title, $banner_status, $banner_reg);
	}

	public function do_upload_banner($title = null, $status = null, $reg = null)
	{
		$type = explode('.', $_FILES["banner"]["name"]);
		$type = $type[count($type)-1];
		$link = "./assets/images/".$_FILES["banner"]["name"];
		if(in_array($type, array("jpg", "jpeg", "gif", "png")));
		if(is_uploaded_file($_FILES["banner"]["tmp_name"])) {
			$data = array(
				'banner_content' => $_FILES["banner"]["name"],
				'banner_title' => $title,
				'banner_status' => $status,
				'banner_reg' => $reg
			);
			$this->db->insert('data_banner', $data);
			if(move_uploaded_file($_FILES["banner"]["tmp_name"], $link)) {
				return $link;
			}
		} else {
			return "";
		}
	}

	public function create_video()
	{
		$this->load->helper('url');

		$playback_title = $this->input->post('title');
		$playback_content = $this->input->post('content');
		$playback_status = $this->input->post('status');
		$playback_reg = $this->input->post('register');

		$this->do_upload_video($playback_title, $playback_content, $playback_status, $playback_reg);

	}

	public function do_upload_video($title = null, $content=null, $status = null, $reg = null)
	{

		$type = explode('.', $_FILES["video"]["name"]);
		$type = $type[count($type)-1];
		$link = "./assets/video/".$_FILES["video"]["name"];
		if(in_array($type, array("mp4", "avi", "flv","mp3")));
		if(is_uploaded_file($_FILES["video"]["tmp_name"])) {
			$data = array(
				'playback_video' => $_FILES["video"]["name"],
				'playback_title' => $title,
				'playback_content' =>$content,
				'playback_status' => $status,
				'playback_reg' => $reg
			);
			$this->db->insert('data_playback', $data);
			if(move_uploaded_file($_FILES["video"]["tmp_name"], $link)) {
				return $link;
			}
		} else {
			return "";
		}
	}


	public function create_slide()
	{
		$this->load->helper('url');

		$slide_title = $this->input->post('title');
		$slide_status = $this->input->post('status');
		$slide_reg = $this->input->post('reg');

		$this->do_upload_image_slide($slide_title,$slide_status,$slide_reg);

	}


	public function do_upload_image_slide($title = null, $status = null, $reg = null)
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
		$notice_content = $this->input->post('notice');
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
		$message_content = $this->input->post('message');
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
		$this->db->select('*');
		$this->db->from('data_slide');

		$query = $this->db->get();
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

	public function getLastidimages()
	{


			$this->db->select('id');
			$this->db->from('data_slide');
			$this->db->order_by('id','ASC');
			$this->db->limit(1);

			$query = $this->db->get();

			return $query->result();

	}


	public function getLastidVedio()
	{


			$this->db->select('id');
			$this->db->from('data_playback');
			$this->db->order_by('id','ASC');
			$this->db->limit(1);

			$query = $this->db->get();

			return $query->result();

	}

	//update

	public function setSetting($data, $update)
	{

    $this->load->helper('url');
    $signage_logoheight = $this->input->post('logoheight');
    $signage_mediaheight = $this->input->post('mediaheight');
    $signage_slideheight = $this->input->post('slideheight');
    $signage_messageheight = $this->input->post('messageheight');
    $signage_footerheight = $this->input->post('footerheight');
	  $sigange_bannerheight = $this->input->post('bannerheight');
	  $signage_id = $this->input->post('hiddenid');

    $data = array(
      'logoheight' => $signage_logoheight,
      'mediaheight' => $signage_mediaheight,
      'slideheight' => $signage_slideheight,
      'messageheight' => $signage_messageheight,
      'bannerheight' => $sigange_bannerheight,
      'footerheight' => $signage_footerheight,
	    'id'=> $signage_id

    );

    $this->db->where('id', $update);

    $this->db->update('signagesetting', $data);
	}

	public function updateBanner($data, $update)
	{

    $this->load->helper('url');
    $banner_title = $this->input->post('title');
    $banner_content = $this->input->post('content');
    $banner_status = $this->input->post('status');
    $banner_id = $this->input->post('hiddenid');

    $data = array(
      'banner_title' => $banner_title,
      'banner_content' => $banner_content,
      'banner_status' => $banner_status,
      'id'=> $banner_id

    );

    $this->db->where('id', $update);

    $this->db->update('data_banner', $data);

    }

    public function updateMessage($data, $update)
	{

    $this->load->helper('url');
    $message_title = $this->input->post('title');
    $message_content = $this->input->post('content');
    $message_status = $this->input->post('status');
    $message_id = $this->input->post('hiddenid');

    $data = array(
      'message_title' => $message_title,
      'message_content' => $message_content,
      'message_status' => $message_status,
      'id'=> $message_id

    );

    $this->db->where('id', $update);

    $this->db->update('data_message', $data);

    }

    public function updateNotice($data, $update)
	{

    $this->load->helper('url');
    $notice_title = $this->input->post('title');
    $notice_content = $this->input->post('content');
    $notice_status = $this->input->post('status');
    $notice_id = $this->input->post('hiddenid');

    $data = array(
      'notice_title' => $notice_title,
      'notice_content' => $notice_content,
      'notice_status' => $notice_status,
      'id'=> $notice_id

    );

    $this->db->where('id', $update);

    $this->db->update('data_notice', $data);

    }
}
