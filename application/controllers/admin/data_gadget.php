<?php 
class Data_gadget extends CI_Controller{
    public function index()
    {
        $data['gadget'] = $this->rental_model->get_data('gadget')->result();
        $data['kategori'] = $this->rental_model->get_data('kategori')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_gadget', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_gadget()
    {
        $data['kategori'] = $this->rental_model->get_data('kategori')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_gadget', $data); 
        $this->load->view('templates_admin/footer');
    }
    public function tambah_gadget_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->tambah_gadget();
        }else{
            $kode_kategori              = $this->input->post('kode_kategori');
            $merk                       = $this->input->post('merk');
            $tipe                       = $this->input->post('tipe');
            $prosesor                   = $this->input->post('prosesor');
            $ram                        = $this->input->post('ram');
            $kamera                     = $this->input->post('kamera');
            $status                     = $this->input->post('status');
            $harga                      = $this->input->post('harga');
            $denda                      = $this->input->post('denda');
            $gambar                     = $_FILES['gambar']['name'];
            if ($gambar=''){                
            }
            else{
                $config ['upload_path'] = './assets/upload';
                $config ['allowed_types'] = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('gambar')){
                    echo "Gambar gagal diupload!";
                }else{
                    $gambar=$this->upload->data('file_name');
                }
            }
            $data =array(
                'kode_kategori' => $kode_kategori,
                'merk'          => $merk,
                'tipe'          => $tipe,
                'prosesor'      => $prosesor,
                'ram'           => $ram,
                'kamera'        => $kamera,
                'status'        => $status,
                'harga'         => $harga,
                'denda'         => $denda,
                'gambar'        => $gambar
            );
            $this->rental_model->insert_data($data,'gadget');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Ditambahkan<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/data_gadget');
        }
    }

    public function update_gadget($id)
    {
        $where = array('id_gadget' => $id);
        $data['gadget']= $this->db->query("SELECT * FROM gadget gd, kategori kt WHERE gd.kode_kategori=kt.kode_kategori AND gd.id_gadget='$id'")->result();
        $data['kategori'] = $this->rental_model->get_data('kategori')->result(); 
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_gadget', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_gadget_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE)
        {
            $this->update_gadget();
        }else{
            $id                         = $this->input->post('id_gadget');
            $kode_kategori              = $this->input->post('kode_kategori');
            $merk                       = $this->input->post('merk');
            $tipe                       = $this->input->post('tipe');
            $prosesor                   = $this->input->post('prosesor');
            $ram                        = $this->input->post('ram');
            $kamera                     = $this->input->post('kamera');
            $status                     = $this->input->post('status');
            $harga                      = $this->input->post('harga');
            $denda                      = $this->input->post('denda');
            $gambar                     = $_FILES['gambar']['name'];
            if ($gambar){
                $config ['upload_path'] = './assets/upload';
                $config ['allowed_types'] = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);

                if($this->upload->do_upload('gambar')){
                    $gambar=$this->upload->data('file_name');
                    $this->db->set('gambar', $gambar);
                }
            }

            $data = array(
                'kode_kategori' => $kode_kategori,
                'merk'          => $merk,
                'tipe'          => $tipe,
                'prosesor'      => $prosesor,
                'ram'           => $ram,
                'kamera'        => $kamera,
                'status'        => $status,
                'harga'         => $harga,
                'denda'         => $denda
            );

            $where = array(
                'id_gadget' => $id
            );
            $this->rental_model->update_data('gadget', $data, $where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Diupdate<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/data_gadget');
        }
    }


    public function _rules()
    {
        $this->form_validation->set_rules('kode_kategori','Kode Kategori', 'required');
        $this->form_validation->set_rules('merk','Merk', 'required');
        $this->form_validation->set_rules('tipe','Tipe', 'required');
        $this->form_validation->set_rules('prosesor','Prosesor', 'required');
        $this->form_validation->set_rules('ram','RAM', 'required');        
        $this->form_validation->set_rules('kamera','Kamera', 'required');
        $this->form_validation->set_rules('status','Status', 'required');
        $this->form_validation->set_rules('harga','Harga', 'required|integer');
        $this->form_validation->set_rules('denda','Denda', 'required|integer');
        // $this->form_validation->set_rules('gambar','Gambar', 'required');
    }

    public function detail_gadget($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_gadget($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_gadget', $data);
        $this->load->view('templates_admin/footer');
    }

    public function delete_gadget($id)
    {   
        $where = array('id_gadget' => $id);
        $this->rental_model->delete_data($where, 'gadget');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Dihapus<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/data_gadget');
        
    }
}

?>