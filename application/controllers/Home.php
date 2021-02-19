<?php


/**
 * 
 */
class Home extends CI_Controller
{
	
	public function index()
	{
		$data['url']  = $this->uri->segment(2);
		$this->load->view('header',$data);
		$this->load->view('home');
		$this->load->view('footer');
	}



	public function cari()
	{
		$data['url']  = $this->uri->segment(2);
		$this->load->view('header',$data);
		$this->load->view('cari');
		$this->load->view('footer');
	}
}