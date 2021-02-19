<?php



/**
 * 
 */
class Dashboard extends CI_Controller
{
	public function index()
	{
		$this->template->load("template/template","admin/dashboard");
	}
}