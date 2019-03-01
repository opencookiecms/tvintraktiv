<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Welcome_model');

	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/mydashboard');
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
 		$data['get_slide']= $this->Welcome_model->get_slideview();
 		$data['get_lastidv'] = $this->Welcome_model->getLastidVedio();
 		$this->load->view('screen_play', $data);

	}

	public function screen02()
	{
		$this->load->database();
		$data['get_height']=$this->Welcome_model->get_settings();
		$data['get_banner']=$this->Welcome_model->get_bannerview();
		$data['get_message']=$this->Welcome_model->get_messageview();
		$data['get_notice']= $this->Welcome_model->get_noticeview();
		$data['get_playback']= $this->Welcome_model->get_playbackview();
		$data['get_slide']= $this->Welcome_model->get_slideview();
		$data['get_lastid'] = $this->Welcome_model->getLastidimages();
		$data['get_lastidv'] = $this->Welcome_model->getLastidVedio();
		$this->load->view('screen_play02', $data);
	}

	public function screen03()
	{
		$this->load->database();
		$data['get_height']=$this->Welcome_model->get_settings();
		$data['get_banner']=$this->Welcome_model->get_bannerview();
		$data['get_message']=$this->Welcome_model->get_messageview();
		$data['get_notice']= $this->Welcome_model->get_noticeview();
		$data['get_playback']= $this->Welcome_model->get_playbackview();
		$data['get_slide']= $this->Welcome_model->get_slideview();
		$data['get_lastid'] = $this->Welcome_model->getLastidimages();
		$data['get_lastidv'] = $this->Welcome_model->getLastidVedio();
		$this->load->view('screen_play03', $data);
	}

	public function screen04()
	{
		$this->load->database();
		$data['get_height']=$this->Welcome_model->get_settings();
		$data['get_banner']=$this->Welcome_model->get_bannerview();
		$data['get_message']=$this->Welcome_model->get_messageview();
		$data['get_notice']= $this->Welcome_model->get_noticeview();
		$data['get_playback']= $this->Welcome_model->get_playbackview();
		$data['get_slide']= $this->Welcome_model->get_slideview();
		$data['get_lastid'] = $this->Welcome_model->getLastidimages();
		$data['get_lastidv'] = $this->Welcome_model->getLastidVedio();
		$this->load->view('screen_play04', $data);
	}

	public function screen05()
	{
		$this->load->database();
		$data['get_height']=$this->Welcome_model->get_settings();
		$data['get_banner']=$this->Welcome_model->get_bannerview();
		$data['get_message']=$this->Welcome_model->get_messageview();
		$data['get_notice']= $this->Welcome_model->get_noticeview();
		$data['get_playback']= $this->Welcome_model->get_playbackview();
		$data['get_slide']= $this->Welcome_model->get_slideview();
		$data['get_lastid'] = $this->Welcome_model->getLastidimages();
		$data['get_lastidv'] = $this->Welcome_model->getLastidVedio();
		$this->load->view('screen5', $data);
	}

	public function screen06()
	{
		$this->load->database();
		$data['get_height']=$this->Welcome_model->get_settings();
		$data['get_banner']=$this->Welcome_model->get_bannerview();
		$data['get_message']=$this->Welcome_model->get_messageview();
		$data['get_notice']= $this->Welcome_model->get_noticeview();
		$data['get_playback']= $this->Welcome_model->get_playbackview();
		$data['get_slide']= $this->Welcome_model->get_slideview();
		$data['get_lastid'] = $this->Welcome_model->getLastidimages();
		$data['get_lastidv'] = $this->Welcome_model->getLastidVedio();
		$this->load->view('screen6', $data);
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

 	public function deletephoto($id)
 	{
 		$this->db->where('id', $id);
 		$this->db->delete('data_slide');

 		redirect(base_url('welcome/photo'));

 	}

	public function screen_dasboard()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('screen');
		$this->load->view('template/footer');
	}

	//update

	public function updatebanner($value="")
	{

		$this->load->database();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$data['get_banner']=$this->Welcome_model->get_bannerview($value);
		$this->load->view('bannerupdate', $data);
		$this->load->view('template/footer');

		$this->Welcome_model->updateBanner($data, $this->input->post('hiddenid'));

	}

	public function updatemessage($value="")
	{

		$this->load->database();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$data['get_message']=$this->Welcome_model->get_messageview($value);
		$this->load->view('messageupdate', $data);
		$this->load->view('template/footer');

		$this->Welcome_model->updateMessage($data, $this->input->post('hiddenid'));

	}

	public function updatenotice($value="")
	{

		$this->load->database();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$data['get_notice']=$this->Welcome_model->get_noticeview($value);
		$this->load->view('noticeupdate', $data);
		$this->load->view('template/footer');

		$this->Welcome_model->updateNotice($data, $this->input->post('hiddenid'));

	}



}
