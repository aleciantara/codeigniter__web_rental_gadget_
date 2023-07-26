<?php

class data_transaksi extends CI_Controller{

	public function index()
	{
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, gadget gd, customer cs WHERE tr.id_gadget=gd.id_gadget AND tr.id_customer=cs.id_customer ORDER BY id_rental DESC")->result();
		$this->load->view('templates_admin/header');
        $this->load->view('templates_manager/sidebar');
        $this->load->view('manager/data_transaksi',$data);
        $this->load->view('templates_admin/footer');
	}
}
?>