<?php 

class Error_404 extends CI_Controller
{

	public function index()
	{
		$this->load->view('error_404');
	}
}