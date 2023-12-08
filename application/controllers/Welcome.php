<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function about(){
		// echo 'hello I am about';
		$this->load->view('about');
	}

	public function home(){
		//this is home tag
		$this->load->view('home');
	}
}
