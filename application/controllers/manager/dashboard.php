<?php

class Dashboard extends CI_Controller{
    public function index()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_manager/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('templates_admin/footer');
    }
}
?>