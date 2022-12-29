<?php

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data['title'] = 'Aduri Groups - Most Trusted Real Estate Company in Hyderabad';
		$this->load->view('index', $data);
	}

	public function thank_you()
	{
		$this->load->view('thank-you');
	}

	public function page_not_found()
	{
		// echo 'Page not found...';die;
		$this->load->view('error_404');
	}

	
}
