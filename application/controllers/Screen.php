<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Screen extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Data_model');
        
        //Do your magic here
    }
    

    public function index()
    {
        $this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pages/screen');
		$this->load->view('template/footer');
    }

    public function screen01()
	{
        ///load the data to show on screen/////
		$this->load->database();
		$data['get_height']=$this->Data_model->get_settings();
 		$data['get_banner']=$this->Data_model->get_bannerview();
 		$data['get_message']=$this->Data_model->get_messageview();
 		$data['get_notice']= $this->Data_model->get_noticeview();
 		$data['get_playback']= $this->Data_model->get_playbackview();
 		$data['get_slide']= $this->Data_model->get_slideview();
		$data['get_lastidv'] = $this->Data_model->getLastidVedio();
		$data['get_lastid'] = $this->Data_model->getLastidimages();
		$data['get_lastidv'] = $this->Data_model->getLastidVedio();
 		$this->load->view('screen/screen_play01', $data);
	}

	public function screen02()
	{
        ///load the data to show on screen/////
		$this->load->database();
		$data['get_height']=$this->Data_model->get_settings();
 		$data['get_banner']=$this->Data_model->get_bannerview();
 		$data['get_message']=$this->Data_model->get_messageview();
 		$data['get_notice']= $this->Data_model->get_noticeview();
 		$data['get_playback']= $this->Data_model->get_playbackview();
 		$data['get_slide']= $this->Data_model->get_slideview();
		$data['get_lastidv'] = $this->Data_model->getLastidVedio();
		$data['get_lastid'] = $this->Data_model->getLastidimages();
		$data['get_lastidv'] = $this->Data_model->getLastidVedio();
 		$this->load->view('screen/screen_play02', $data);
	}


	public function screen03()
	{
        ///load the data to show on screen/////
		$this->load->database();
		$data['get_height']=$this->Data_model->get_settings();
 		$data['get_banner']=$this->Data_model->get_bannerview();
 		$data['get_message']=$this->Data_model->get_messageview();
 		$data['get_notice']= $this->Data_model->get_noticeview();
 		$data['get_playback']= $this->Data_model->get_playbackview();
 		$data['get_slide']= $this->Data_model->get_slideview();
		$data['get_lastidv'] = $this->Data_model->getLastidVedio();
		$data['get_lastid'] = $this->Data_model->getLastidimages();
		$data['get_lastidv'] = $this->Data_model->getLastidVedio();
 		$this->load->view('screen/screen_play03', $data);
	}

	public function screen04()
	{
        ///load the data to show on screen/////
		$this->load->database();
		$data['get_height']=$this->Data_model->get_settings();
 		$data['get_banner']=$this->Data_model->get_bannerview();
		 $data['get_message']=$this->Data_model->get_messageview();
		 $data['get_youtube'] =$this->Data_model->get_youtubeview();
 		$data['get_notice']= $this->Data_model->get_noticeview();
 		$data['get_playback']= $this->Data_model->get_playbackview();
 		$data['get_slide']= $this->Data_model->get_slideview();
		$data['get_lastidv'] = $this->Data_model->getLastidVedio();
		$data['get_lastid'] = $this->Data_model->getLastidimages();
		$data['get_lastidyoutube'] = $this->Data_model->getLastidyoutube();
 		$this->load->view('screen/screen_play04', $data);
	}

	public function screen05()
	{
        ///load the data to show on screen/////
		$this->load->database();
		$data['get_height']=$this->Data_model->get_settings();
 		$data['get_banner']=$this->Data_model->get_bannerview();
 		$data['get_message']=$this->Data_model->get_messageview();
 		$data['get_notice']= $this->Data_model->get_noticeview();
 		$data['get_playback']= $this->Data_model->get_playbackview();
 		$data['get_slide']= $this->Data_model->get_slideview();
		$data['get_lastidv'] = $this->Data_model->getLastidVedio();
		$data['get_lastid'] = $this->Data_model->getLastidimages();
		$data['get_lastidv'] = $this->Data_model->getLastidVedio();
		$data['get_lastidyoutube'] = $this->Data_model->getLastidyoutube();
		$data['get_youtube'] =$this->Data_model->get_youtubeview();
 		$this->load->view('screen/screen_play05', $data);
	} 

}

/* End of file Controllername.php */
