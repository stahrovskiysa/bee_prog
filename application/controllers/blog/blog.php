<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Blog extends CI_Controller {

	public function index()
	{
                $this->load->model('blog/users_model');

		$this->load->view('blog/blog_index');

	}
}
