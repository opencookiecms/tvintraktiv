<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Datahandler extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
		$this->load->model('Welcome_model');
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
        $data['get_banner']=$this->Welcome_model->get_bannerview();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('banner', $data);
		$this->load->view('template/footer');
	
    }

    public function video()
	{
        $this->load->database();
        $data['title'] = 'Add New Playback';
        $data['get_playback']=$this->Welcome_model->get_playbackview();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('video', $data);
		$this->load->view('template/footer');
	
    }
    
    public function photo()
	{

		$this->load->database();
        $data['title'] = 'Add New Slide';
        $data['get_slide']=$this->Welcome_model->get_slideview();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('photo', $data);
		$this->load->view('template/footer');

    }
    
    public function message()
	{
        $this->load->database();
        $data['title'] = 'Add New Message';
        $data['get_message']=$this->Welcome_model->get_messageview();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('message', $data);
		$this->load->view('template/footer');
	
    }

    public function notice()
	{
        $data['title'] = 'Add New Notice';
    	$data['get_notice']=$this->Welcome_model->get_noticeview();
        $this->load->database();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('notice', $data);
		$this->load->view('template/footer');
	

	}
    
    public function settings($value="")
	{

		$this->load->database();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$data['get_height']=$this->Welcome_model->get_settings($value);
		$this->load->view('settings', $data);
		$this->load->view('template/footer');

		$this->Welcome_model->setSetting($data, $this->input->post('hiddenid'));
    }
    


    

    //end view of data

}

/* End of file Controllername.php */

