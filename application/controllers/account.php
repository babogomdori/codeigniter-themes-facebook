<?php

class Account extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->library('facebook');
		$this->load->helper('url');

		$this->facebook->enable_debug(TRUE);
		
		$this->_init();		
	}
	
	private function _init() {
		//$this->login();
	}
	
	function login()
	{

		if ( !$this->facebook->logged_in() )
		{
			// From now on, when we call login() or login_url(), the auth
			// will redirect back to this url.

			$this->facebook->set_callback(site_url('home'));

			// Header redirection to auth.

			$this->facebook->login();

			// You can alternatively create links in your HTML using
			// $this->facebook->login_url(); as the href parameter.
		}
		else
		{
			redirect('home');
		}
	}
	
	function logout()
	{
		$this->facebook->logout();
		redirect('home');
	}	
}