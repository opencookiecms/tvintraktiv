<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Datahandler extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
		$this->load->model('Data_model');
        //Do your magic here
    }


    public function index()
    {

    }

    //view the data
	public function banner()
	{
        $this->load->database();
        $data['title'] = 'Add New Banner';
        $data['get_banner']=$this->Data_model->get_bannerview();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/banner', $data);
		$this->load->view('template/footer');

    }

    public function video()
	  {
        $this->load->database();
        $data['title'] = 'Add New Playback';
        $data['get_playback']=$this->Data_model->get_playbackview();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
		$this->load->view('pages/video', $data);
		$this->load->view('template/footer');

    }

    public function photo()
	{

		$this->load->database();
        $data['title'] = 'Add New Slide';
        $data['get_slide']=$this->Data_model->get_slideview();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/photo', $data);
		$this->load->view('template/footer');

    }

    public function message()
	{
        $this->load->database();
        $data['title'] = 'Add New Message';
        $data['get_message']=$this->Data_model->get_messageview();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/message', $data);
		$this->load->view('template/footer');

    }

    public function notice()
	{
        $data['title'] = 'Add New Notice';
    	$data['get_notice']=$this->Data_model->get_noticeview();
        $this->load->database();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/notice', $data);
		$this->load->view('template/footer');


	}


	public function youtube()
	{
		$data['title'] = 'Add New Youtube Vedio';
    	$data['get_youtube']=$this->Data_model->get_youtubeview();
        $this->load->database();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/youtube', $data);
		$this->load->view('template/footer');
	}

    public function settings($value="")
	{

		$this->load->database();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$data['get_height']=$this->Data_model->get_settings($value);
		$this->load->view('pages/settings', $data);
		$this->load->view('template/footer');

		$this->Data_model->setSetting($data, $this->input->post('hiddenid'));
	}
	
	///Add the data section here //////
	public function addVideo()
	{
		$this->form_validation->set_rules('title','Title are require','required');

		$this->load->database();

		if($this->form_validation->run() === FALSE)

		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('pages/video_add');
			$this->load->view('template/footer');
		}
	
		else
		{
			$this->Data_model->create_video();
			redirect(base_url('config/video'));

		}
	}

	public function addSlide()
	{
		$this->form_validation->set_rules('title','Title are require','required');

		$this->load->database();

		if($this->form_validation->run() === FALSE)

		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('pages/slide_add');
			$this->load->view('template/footer');
		}
	
		else
		{
			$this->Data_model->create_slide();
			redirect(base_url('config/photo'));

		}
	}

	public function addBanner()
	{
		$this->form_validation->set_rules('title','Title are require','required');

		$this->load->database();

		if($this->form_validation->run() === FALSE)

		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('pages/banner_add');
			$this->load->view('template/footer');
		}
	
		else
		{
			$this->Data_model->create_banner();
			redirect(base_url('config/banner'));

		}
	}

	public function addMessage()
	{
		$this->form_validation->set_rules('title','Title are require','required');

		$this->load->database();

		if($this->form_validation->run() === FALSE)

		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('pages/message_add');
			$this->load->view('template/footer');
		}
	
		else
		{
			$this->Data_model->create_message();
			redirect(base_url('config/message'));

		}
	}


	public function addNotice()
	{
		$this->form_validation->set_rules('title','Title are require','required');

		$this->load->database();

		if($this->form_validation->run() === FALSE)

		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('pages/notice_add');
			$this->load->view('template/footer');
		}
	
		else
		{
			$this->Data_model->create_notice();
			redirect(base_url('config/notice'));

		}
	}

	public function loadenotice($value="")
	{

		$this->load->database();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$data['get_notice']=$this->Data_model->get_noticeviewbyid($value);
		$this->load->view('pages/notice_update', $data);
		$this->load->view('template/footer');
	}

	public function update_notice()
	{
		$id = $this->input->post('hiddenid');
		$this->Data_model->updateNotice($id);
		redirect(base_url('config/notice'));

	}


	public function notice_delete($value)
	{
		
		$this->db->where('id', $value);
		$this->db->delete('data_notice');

		redirect(base_url('config/notice'));
	}

	public function vedio_delete($value)
	{
		
		$this->db->where('id', $value);
		$this->db->delete('data_playback');

		redirect(base_url('config/video'));
	}

	public function slide_delete($value)
	{
		
		$this->db->where('id', $value);
		$this->db->delete('data_slide');

		redirect(base_url('config/photo'));
	}


	public function loademessage($value="")
	{

		$this->load->database();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$data['get_message']=$this->Data_model->get_messageviewbyid($value);
		$this->load->view('pages/message_update', $data);
		$this->load->view('template/footer');
	}

	public function update_message()
	{
		$id = $this->input->post('hiddenid');
		$this->Data_model->updateMessage($id);
		redirect(base_url('config/message'));
	}


	public function message_delete($value)
	{
		
		$this->db->where('id', $value);
		$this->db->delete('data_message');

		redirect(base_url('config/message'));
	}

	public function delete_banner($value)
	{
		
		$this->db->where('id', $value);
		$this->db->delete('data_banner');

		redirect(base_url('config/banner'));
	}


	public function addYoutube()
	{
		$this->form_validation->set_rules('title','Title are require','required');

		$this->load->database();

		if($this->form_validation->run() === FALSE)

		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('pages/youtube_add');
			$this->load->view('template/footer');
		}
	
		else
		{
			$this->Data_model->create_youtube();
			redirect(base_url('config/youtube'));

		}
	}


	public function loadyoutube($value="")
	{

		$this->load->database();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$data['get_youtube']=$this->Data_model->get_youtubeviewbyid($value);
		$this->load->view('pages/youtube_update', $data);
		$this->load->view('template/footer');
	}

	public function update_youtube()
	{
		$id = $this->input->post('hiddenid');
		$this->Data_model->updateYoutube($id);
		redirect(base_url('config/youtube'));
	}


	public function delete_youtube($value)
	{
		
		$this->db->where('id', $value);
		$this->db->delete('data_youtube');

		redirect(base_url('config/youtube'));
	}
}
