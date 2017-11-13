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
		$data['blogs'] = $this->m->getBlog();
		//print_r($data);
		$this->load->view('layout/header');
		$this->load->view('blog/index', $data);
		$this->load->view('layout/footer');
	}

	function add()
	{
		$data['blogs'] = $this->m->getBlog();

		$this->load->view('layout/header');
		$this->load->view('blog/add', $data);
		$this->load->view('layout/footer');
	}

	function submit()
	{
		$result = $this->m->submit();

		if ($result) {
			$this->session->set_flashdata('success_msg', 'Record added successfully');
			//echo "it's true";
		} else {
			$this->session->set_flashdata('error_msg', 'Faill to add record');
			//echo "it's false";
		}
		redirect(base_url('blog/index'));
	}

	function edit($id)
	{	
		$data['blog'] = $this->m->getBlogById($id);

		$this->load->view('layout/header');
		$this->load->view('blog/edit', $data);
		$this->load->view('layout/footer');
	}

	function update()
	{	
		$id = $this->input->post('txt_hidden_id');
		$result = $this->m->update($id);

		if ($result) {
			$this->session->set_flashdata('success_msg', 'Record updated successfully');
			//echo "it's true";
		} else {
			$this->session->set_flashdata('error_msg', 'Faill to update record');
			//echo "it's false";
		}
		redirect(base_url('blog/index'));
	}
}
