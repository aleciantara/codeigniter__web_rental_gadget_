<?php

class Register extends CI_Controller{
    public function index()
    {
        $this->_rules();
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_customer/header');
            $this->load->view('templates_customer/navigation');
            $this->load->view('register_form');
            $this->load->view('templates_customer/footer');

        }else{
            $nama                       = $this->input->post('nama');
            $username                   = $this->input->post('username');
            $alamat                     = $this->input->post('alamat');
            $gender                     = $this->input->post('gender');
            $no_telepon                 = $this->input->post('no_telepon');
            $password                   = md5($this->input->post('password'));
            $role_id                    = '2';

            $data = array(
                'nama'              => $nama,
                'username'          => $username,
                'alamat'            => $alamat,
                'gender'            => $gender,
                'no_telepon'        => $no_telepon,
                'password'          => $password,
                'role_id'           => $role_id
            );
            $this->rental_model->insert_data($data,'customer');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Registrasi Berhasil, Silakan Login<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('auth/login');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('username','Username','required|is_unique[customer.username]');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('no_telepon', 'No. Telepon', 'required|integer');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }

}
?>