<?php

class Data_customer extends CI_Controller{
    
    public function index()
    {
        $data['customer'] = $this->rental_model->get_data('customer')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_customer', $data);
        $this->load->view('templates_admin/footer');
    }
}


?>