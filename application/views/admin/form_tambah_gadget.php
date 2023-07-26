<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Form Input Data Gadget</h1>
        </div>

        <div class="card">
            <div class="card-body">

                <form method="POST" action="<?php echo base_url('admin/data_gadget/tambah_gadget_aksi') ?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kategori Gadget</label>
                            <select name="kode_kategori" class="form-control">
                                <option value="">--Pilih Kategori Gadget--</option>
                                <?php foreach($kategori as $kt) : ?>
                                    <option value="<?php echo $kt->kode_kategori ?>"><?php echo $kt->nama_kategori ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('kode_kategori','<div class="text-small text-danger">','</div>')?>
                        </div>

                        <div class="form-group">
                            <label>Merk</label>
                            <input type="text" name="merk" class= "form-control">
                            <?php echo form_error('merk','<div class="text-small text-danger">','</div>')?>
                        </div>

                        <div class="form-group">
                            <label>Tipe</label>
                            <input type="text" name="tipe" class= "form-control">
                            <?php echo form_error('tipe','<div class="text-small text-danger">','</div>')?>
                        </div>

                        <div class="form-group">
                            <label>Prosesor</label>
                            <input type="text" name="prosesor" class= "form-control">
                            <?php echo form_error('prosesor','<div class="text-small text-danger">','</div>')?>
                        </div>

                        <div class="form-group">
                            <label>RAM</label>
                            <input type="text" name="ram" class= "form-control">
                            <?php echo form_error('ram','<div class="text-small text-danger">','</div>')?>
                        </div> 
                        
                        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                        <button type="reset" class="btn btn-danger mt-4">Reset</button>
                    </div>

                    <div class="col-md-6">
                   
                        <div class="form-group">
                            <label>Kamera</label>
                            <input type="text" name="kamera" class= "form-control">
                            <?php echo form_error('kamera','<div class="text-small text-danger">','</div>')?>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="">--Pilih Status--</option>
                                <option value="1">Tersedia</option>
                                <option value="0">Tidak tersedia</option>
                            </select>
                            <?php echo form_error('status','<div class="text-small text-danger">','</div>')?>
                        </div>
                        
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control">
                            <?php echo form_error('harga','<div class="text-small text-danger">','</div>')?>
                        </div>

                        <div class="form-group">
                            <label>Denda</label>
                            <input type="text" name="denda" class="form-control">
                            <?php echo form_error('denda','<div class="text-small text-danger">','</div>')?>
                        </div>

                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                            <?php echo form_error('gambar','<div class="text-small text-danger">','</div>')?>
                        </div>
                        
                    </div>
                </div>
                
                </form>
            </div>
        </div>
    </section>
</div>
