<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestController extends CI_Controller
{
    public function index(){
        echo 'Hello I am Index';
    }

    public function aboutus(){
       $this->load->view('test.php');
    }

    public function home(){
        $this->load->view('home');
    }

    public function contact(){
        $this->load->view('contact');
    }

    public function blog($blog_url = ''){
        // echo $blog_url;
        $this->load->view('blog');        
    }

    public function testing(){
        $this->load->view('test.php');
    }
}