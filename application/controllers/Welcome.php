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
		
		$data['get_banner']=$this->Welcome_model->get_bannerview();
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
			$lastId=$this->Welcome_model->getLastId();
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
			$lastId=$this->Welcome_model->getLastId();
			redirect(base_url('welcome/video'));
		}
	}

	public function photo()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('photo');
		$this->load->view('template/footer');
	}

	public function notice()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('notice');
		$this->load->view('template/footer');
	}

	public function message()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('message');
		$this->load->view('template/footer');
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
}
