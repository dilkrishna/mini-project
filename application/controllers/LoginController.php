<?php


class LoginController extends MY_Controller{
	
    public function index()
    {
        $this->load->view('public/admin_login');
    }
    
    public function admin_login()
    {
        $this->form_validation->set_rules('username','username','required|alpha|trim|');
        $this->form_validation->set_rules('password','password','required|');
        $this->form_validation->set_error_delimiters('<P class= "text-danger">','</p>');
        
        if($this->form_validation->run()){
        $username = $this->input->post('username');
        $password =  hash('sha512', $this->input->post('password'));
        
        $this->load->model('login_model');
        $login_id = $this->login_model->login_valid($username,$password);
            if($login_id){
                $this->session->set_userdata('user_id',$login_id);
                redirect('AdminController/dashboard');
            }
            else{
                $this->session->set_flashdata('login_failed','Invalid Username Or Password');
                redirect('LoginController');
        }
        }
        else{
              $this->load->view('public/admin_login');
        }
}
}