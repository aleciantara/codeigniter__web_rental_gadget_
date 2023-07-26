<div class="container">
    <div class="card" style="margin-top: 50px; margin-bottom:50px;">
    <div style="font-size: 30px; color:dark-grey;" class="card-header">
        Form Rental Gadget
    </div>
    <div style="font-size: 18px; color:grey; background: light-grey;" class="card-body">
        Silakan mengisi tanggal rental dan tanggal pengembalian <?php echo $this->session->userdata('username')?>
        <span><?php echo $this->session->flashdata('pesan')?></span>
    </div>

    <div class="card-body">
        <?php foreach($detail as $dt) : ?>
            <form method="POST" action="<?php echo base_url('customer/rental/tambah_rental_aksi/'.$dt->id_gadget) ?>">
            <div class="row">
                <div class="col-md-4">
                            <img style=" width: 360px;" src="<?php echo base_url('assets/upload/'.$dt->gambar) ?>" alt="">
                </div>

                <div class="col-md-8 mt-4 ml-8 pl-4 form-group">

                    <label for="">Merk Gadget</label>
                    <input type="hidden" name="id_gadget" value="<?php echo $dt->id_gadget?>">
                    <input type="text" name="merk" class="form-control mb-2 " value="<?php echo $dt->merk?>" readonly>
                    
                    <label for="">Tipe Gadget</label>
                    <input type="text" name="tipe" class="form-control mb-2" value="<?php echo $dt->tipe?>" readonly>
                    
                    <label for="">Harga Rental/Hari</label>
                    <input type="text" name="harga" class="form-control mb-2" value="<?php echo $dt->harga?>" readonly>
                    
                    <label for="">Denda/Hari</label>
                    <input type="text" name="denda" class="form-control mb-2" value="<?php echo $dt->denda?>" readonly>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <div class="form-group">
                                <label for="">Tanggal Rental</label>
                                <input type="date" name="tanggal_rental" class="form-control mb-2">
                                <?php echo form_error('tanggal_rental', '<div class="text-small text-danger">','</div>' )?>
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <div class="form-group">
                                <label for="">Tanggal Kembali</label>
                                <input type="date" name="tanggal_kembali" class="form-control mb-2">
                                <?php echo form_error('tanggal_kembali', '<div class="text-small text-danger">','</div>' )?>
                            </div>
                        </div>
                    </div>

                        <button type="submit" class="btn btn-warning btn-lg">Rental</button>

                </div>
            </div>
             </form>
        <?php endforeach;?>
       
    </div>

    </div>
</div>