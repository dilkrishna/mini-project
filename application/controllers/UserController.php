<?php


class UserController extends CI_Controller{
    
    public function index()
    {
        $this->load->view('public/articles_list');
    }
}