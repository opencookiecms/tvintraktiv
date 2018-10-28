<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
		  $this->load->helper('url');
		$this->load->model('Welcome_model');

	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin');
		$this->load->view('template/footer');
	}

	public function screen()
	{

		///load the data to show on screen/////
		$this->load->database();
 		$data['get_banner']=$this->Welcome_model->get_bannerview();
 		$data['get_message']=$this->Welcome_model->get_messageview();
 		$data['get_notice']= $this->Welcome_model->get_noticeview();
 		$this->load->view('screen_play', $data);

	}

	public function banner()
	{
		$data['title'] = 'Add New Banner';

		$this->form_validation->set_rules('title', 'Title', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$data['get_banner']=$this->Welcome_model->get_bannerview();
			$this->load->view('banner', $data);
			$this->load->view('template/footer');
		}
		else
		{
			$this->Welcome_model->create_banner();
			
			redirect(base_url('welcome/banner'));
		}


	}

	public function video()
	{
		$data['title'] = 'Add New Playback';

		$this->form_validation->set_rules('title', 'Title', 'required');

		if($this->form_validation->run() == FALSE)

		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$data['get_playback']=$this->Welcome_model->get_playbackview();
			$this->load->view('video', $data);
			$this->load->view('template/footer');
		}
		else
		{
			$this->Welcome_model->create_video();
			
			redirect(base_url('welcome/video'));
		}
	}

	public function photo()
	{
		$data['title'] = 'Add New Slide';

		$this->form_validation->set_rules('title', 'Title', 'required');

		if($this->form_validation->run() == FALSE)

		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$data['get_slide']=$this->Welcome_model->get_slideview();
			$this->load->view('photo', $data);
			$this->load->view('template/footer');
		}
		else
		{
			$this->Welcome_model->create_slide();
			
			redirect(base_url('welcome/photo'));
		}


	}

	public function notice()
	{
		$data['title'] = 'Add New Notice';

		$this->form_validation->set_rules('title', 'Title', 'required');

		if($this->form_validation->run() == FALSE)

		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$data['get_notice']=$this->Welcome_model->get_noticeview();
			$this->load->view('notice', $data);
			$this->load->view('template/footer');
		}
		else
		{
			$this->Welcome_model->create_notice();

			redirect(base_url('welcome/notice'));
		}


	}

	public function message()
	{
		$data['title'] = 'Add New Message';

		$this->form_validation->set_rules('title', 'Title', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$data['get_message']=$this->Welcome_model->get_messageview();
			$this->load->view('message', $data);
			$this->load->view('template/footer');
		}
		else
		{
			$this->Welcome_model->create_message();
			
			redirect(base_url('welcome/message'));
		}


	}

	public function date()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('date');
		$this->load->view('template/footer');
	}

	public function settings()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('settings');
		$this->load->view('template/footer');
	}

	public function noticedetails()
	{

		$this->load->database();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$data['get_detail']=$this->Welcome_model->get_projekdetail();
		$this->load->view('notice_details', $data);
		$this->load->view('template/footer');
		
	}

	public function messagedetails()
	{

		$this->load->database();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$data['get_detail']=$this->Welcome_model->get_projekdetails();
		$this->load->view('message_details', $data);
		$this->load->view('template/footer');
		
	}
}
