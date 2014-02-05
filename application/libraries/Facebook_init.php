<?php

class Facebook_Init {
	
	function __construct()
	{

		// Get instance
		$this->_obj =& get_instance();
		
		// Prepare Facebook Library
		parse_str($_SERVER['QUERY_STRING'], $_REQUEST);
		
		// Load Facebook Configuration
		$this->_obj->config->load('facebook', TRUE);
		$config = $this->_obj->config->item('facebook');
		
		// Load Facebook Library
		$this->_obj->load->add_package_path(APPPATH.'third_party/facebook/');
		$this->_obj->load->library('facebook', $config);	
		$this->_obj->load->remove_package_path(APPPATH.'third_party/facebook/');

	}
	
}