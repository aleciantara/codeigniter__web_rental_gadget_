<?php

class Dashboard extends CI_Controller{
    public function index()
    {
        $data['gadget'] = $this->rental_model->get_data('gadget')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navigation');
        $this->load->view('customer/dashboard', $data);
        $this->load->view('templates_customer/footer');
    }

    public function detail_gadget($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_gadget($id);
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navigation');
        $this->load->view('customer/detail_gadget', $data);
        $this->load->view('templates_customer/footer');
    }
}
?>