<?php


class login_model extends CI_Model{
    
    public function login_valid($username,$password)
    {
       $q= $this->db->where(['username'=>$username, 'password'=>$password])
                    ->get('user_table');
          if( $q->row()){
              $q->row()->id;
          return TRUE;
          }         

          else{
              return FALSE;
          }
    }
}