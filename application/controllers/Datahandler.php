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
}
