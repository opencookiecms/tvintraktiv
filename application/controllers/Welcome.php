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
		$data['get_height']=$this->Welcome_model->get_settings();
 		$data['get_banner']=$this->Welcome_model->get_bannerview();
 		$data['get_message']=$this->Welcome_model->get_messageview();
 		$data['get_notice']= $this->Welcome_model->get_noticeview();
 		$data['get_playback']= $this->Welcome_model->get_playbackview();
 		$this->load->view('screen_play', $data);

	}

	public function banner()
	{
		$data['title'] = 'Add New Banner';

		$this->load->database();

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

		$this->load->database();

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

		$this->load->database();

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

		$this->load->database();

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

		$this->load->database();

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

		$this->load->database();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$data['get_height']=$this->Welcome_model->get_settings();
		$this->load->view('settings', $data);
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

	///update function///

	public function notice_update()
	{

		$this->load->database();

		$this->form_validation->set_rules('title', 'Title', 'required');

		if($this->form_validation->run() == FALSE)

		{
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('notice');
			$this->load->view('template/footer');
		}
		else
		{
			$this->Welcome_model->noticeupdate($data, $this->input->post('notice_title'));
			redirect(base_url('welcome/notice'));
		}


	}

	//UPDATE

	public function edit($id)
	{
		$this->load->model(Welcome_model);


	}

	public function deletenotice($id)
 	{
 		$this->db->where('id', $id);
 		$this->db->delete('data_notice');

 		redirect(base_url('welcome/notice'));

 	}

 	public function deletebanner($id)
 	{
 		$this->db->where('id', $id);
 		$this->db->delete('data_banner');

 		redirect(base_url('welcome/banner'));

 	}

 	public function deletemessage($id)
 	{
 		$this->db->where('id', $id);
 		$this->db->delete('data_message');

 		redirect(base_url('welcome/message'));

 	}

 	public function deletevideo($id)
 	{
 		$this->db->where('id', $id);
 		$this->db->delete('data_playback');

 		redirect(base_url('welcome/video'));

 	}


}
