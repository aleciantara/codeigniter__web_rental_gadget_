<?php 
class Auth extends CI_Controller{

    public function login()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_customer/header');
            $this->load->view('templates_customer/navigation');
            $this->load->view('form_login');
            $this->load->view('templates_customer/footer');
        }else{
            $username   = $this->input->post('username');
            $password   = md5($this->input->post('password'));

            $cek = $this->rental_model->cek_login($username,$password);

            if($cek == FALSE)
            {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password Salah<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button></div>');
                redirect('auth/login');
                
            }else{
                $this->session->set_userdata('id_customer', $cek->id_customer);
                $this->session->set_userdata('username', $cek->username);
                $this->session->set_userdata('role_id', $cek->role_id);
                $this->session->set_userdata('password', $cek->password);

                switch ($cek->role_id){
                    case 0 :    redirect('admin/dashboard');
                                break;
                    case 1 :    redirect('manager/dashboard');
                                break;
                    case 2 :    $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                                Login berhasil, Selamat Datang di SI Rental Gadget<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button></div>');
                                redirect('customer/dashboard');
                                break;
                    // default:    break;
                }


            }
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('customer/dashboard');
    }
}

?>