<?php


class AdminController extends MY_Controller{
    
    public function index()
    {
    $this->load->view('public/admin_login');        
    }
}
