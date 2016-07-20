<?php


class AdminController extends MY_Controller{
    
    public function dashboard()
    {
        if(! $this->session->userdata('user_id')){ 
            redirect('LoginController');
        }
        $this->load->model('articles_model');
        $articles = $this->articles_model->articles_list();
        
        $this->load->view('admin/dashboard',['articles'=>$articles]);        
    }
}
