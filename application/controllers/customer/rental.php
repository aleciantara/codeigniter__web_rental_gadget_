<?php 
class rental extends CI_Controller
{
    public function tambah_rental($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_gadget($id);
        $this->load->view('templates_customer/header');
        $this->load->view('templates_customer/navigation');
        $this->load->view('customer/tambah_rental', $data);
        $this->load->view('templates_customer/footer');
    }

    public function tambah_rental_aksi($id)
    {    
        $this->_rules();

        if ($this->session->userdata('username') == NULL)  {
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Silakan Login Dahulu sebelum melakukan rental!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('customer/dashboard');

        }elseif($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Mohon mengisi tanggal rental dan tanggal kembali dengan benar!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            $this->tambah_rental($id);
           
        }else{  
            $id_customer            = $this->session->userdata('id_customer');
            $id_gadget              = $this->input->post('id_gadget');
            $tanggal_rental         = $this->input->post('tanggal_rental');
            $tanggal_kembali        = $this->input->post('tanggal_kembali');
            $harga                  = $this->input->post('harga');
            $denda                  = $this->input->post('denda');

            $x 									= strtotime($tanggal_kembali);
            $y 									= strtotime($tanggal_rental);
            $selisih 							= abs($x - $y)/(60*60*24);
            $total_harga						= $selisih * $harga;

            $data = array(
                'id_customer'               => $id_customer,
                'id_gadget'                 => $id_gadget,
                'tanggal_rental'            => $tanggal_rental,
                'tanggal_kembali'           => $tanggal_kembali,
                'harga'                     => $harga,
                'denda'                     => $denda,
                'total_harga'               => $total_harga,
                'tanggal_pengembalian'      => '-',
                'status_rental'             => 'Belum selesai',
                'status_pengembalian'       => 'Belum kembali',
            );
            $this->rental_model->insert_data($data, 'transaksi');


            $status = array(
                'status' => '0'
            );
            $id = array(
                'id_gadget' => $id_gadget
            );
            $this->rental_model->update_data('gadget', $status, $id);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Transaksi Berhasil, Silakan Lakukan Pembayaran Melalui Halaman Transaksi!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('customer/dashboard');
        }
        
    }

    public function tanggal_rental($tanggal_rental)
    {
        

        if($tanggal_rental == NULL)
        {
            $this->form_validation->set_message('tanggal_rental', 'Tanggal rental tidak boleh kosong!');
            return FALSE;

        }elseif($tanggal_rental < date("Y-m-d")){
            $this->form_validation->set_message('tanggal_rental', 'Tanggal rental tidak boleh sebelum dari hari ini!');
            return FALSE;

        }else{
            return TRUE;
        }
    }

    public function tanggal_kembali()
    {
        $tanggal_rental         = $this->input->post('tanggal_rental');
        $tanggal_kembali        = $this->input->post('tanggal_kembali');

        if($tanggal_kembali == NULL){
            $this->form_validation->set_message('tanggal_kembali', 'Tanggal kembali tidak boleh kosong!');
            return FALSE;
        }elseif($tanggal_kembali < $tanggal_rental){
            $this->form_validation->set_message('tanggal_kembali', 'Tanggal pengembalian tidak boleh sebelum tanggal rental!');
            return FALSE;

        }else{
            return TRUE;
        }
    }

    public function _rules()
    {

        $this->form_validation->set_rules('tanggal_rental','Tanggal Rental', 'trim|callback_tanggal_rental');
        $this->form_validation->set_rules('tanggal_kembali','Tanggal Kembali','trim|callback_tanggal_kembali');
    }

    
}

?>