<?php

class Home extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->library('facebook');
		$this->load->helper('url');

		$this->facebook->enable_debug(TRUE);
		
		$this->_init();		
	}
	
	private function _init() {
	
		$this->output->set_template('default');

		$this->load->js('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
		$this->load->js('https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js');
		$this->load->js('https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js');
		$this->load->css('https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css');
				
	}
	
	function index()
	{
		// We can use the open graph place meta data in the head.
		// This meta data will be used to create a facebook page automatically
		// when we 'like' the page.
		// 
		// For more details see: http://developers.facebook.com/docs/opengraph
		
		$opengraph = 	array(
							'type'				=> 'website',
							'title'				=> 'Site Title',
							'url'				=> site_url(),
							'image'				=> '',
							'description'		=> 'Site Description'
						);

		$this->load->vars('opengraph', $opengraph);
		$this->load->section('sidebar', 'sections/menu');		
		$this->load->view('home');
	}
}