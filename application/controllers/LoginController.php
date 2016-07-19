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
        
        if($this->form_validation->run()){
            echo "sucessful";
//        $username = $this->input->post('username');
//        $password =  hash('sha512', $this->input->post('password'));
//        echo $username;
        }
        else{
            $this->load->view('public/admin_login');
        }
}
}