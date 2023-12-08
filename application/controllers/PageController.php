<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller
{
    public function index(){
        $this->load->view('test.php');
    }

    public function blog($blog_url = ""){
        echo "$blog_url";
        $this->load->view('test.php');
    }

    public function Post(){
        $this->load->model('PostModel');
        $post = new PostModel;
        $post = $post->Post_Data();
        echo $post;
    }

    public function show($id){
        $this->load->model("PostModel");
        $post_show = new PostModel;
        $post_show = $post_show->Post_Show($id);
        echo $post_show;
    }

   public function ViewPost()
   {
        $this->load->model('PostModel');
        $post = new PostModel;
        $post = $post->demo();
        $title =$post['title'];
        $body = $post['body'];
        $data['title'] = $title;
        $data['body'] = $body;
        
        $this->load->view('post.php', $data, FALSE);
   }

}