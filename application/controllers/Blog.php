<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_m', 'm');
	}

	function index()
	{
		$data = $this->m->getBlog();
		print_r($data);
		$this->load->view('blog/index');
	}
}
