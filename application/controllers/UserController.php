<?php


class UserController extends MY_Controller{
    
    public function index()
    {
        $this->load->view('public/articles_list');
    }
}