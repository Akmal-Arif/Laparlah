<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->view('shopkeeper/login');
    }

    public function authenticate() {
        $this->load->library('form_validation');
        $this->load->model('Store_model');
        
        $this->form_validation->set_rules('username','Username', 'trim|required');
        $this->form_validation->set_rules('password','Password', 'trim|required');

         if($this->form_validation->run() == true) {
             $username = $this->input->post('username');
             $restaurants = $this->Store_model->getByUsername($username);
             if(!empty($restaurants)) {
                $password = $this->input->post('password');
                if( password_verify($password, $restaurants['password']) == true) {
                    $shopkeeperArray['r_id'] = $restaurants['r_id'];
                    $shopkeeperArray['username'] = $restaurants['username'];
                    if($restaurants['verification']==1){
                        $this->session->set_userdata('shopkeeper', $shopkeeperArray);
                    redirect(base_url().'shopkeeper/home');
                    } else{
                        $this->session->set_flashdata('msg', 'Unverified user. Please wait for verification from admin');
                        redirect(base_url().'shopkeeper/login/index');
                    }
                    //$this->session->set_userdata('shopkeeper', $shopkeeperArray);
                    //redirect(base_url().'shopkeeper/home');
                } else {
                    $this->session->set_flashdata('msg', 'Either username or password is incorrect');
                    redirect(base_url().'shopkeeper/login/index');
                }
             } else {
                $this->session->set_flashdata('msg', 'Either username or password is incorrect');
                redirect(base_url().'shopkeeper/login/index');
             }
             //success
         } else {
             //Error
            $this->load->view('shopkeeper/login');
         }
    }

    public function logout() {
        $this->session->unset_userdata('shopkeeper');
        redirect(base_url().'shopkeeper/login/index');
    }
}