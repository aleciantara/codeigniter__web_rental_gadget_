<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Form Update Data Gadget</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <?php foreach ($gadget as $gd) : ?>
                <form method="POST" action="<?php echo base_url('admin/data_gadget/update_gadget_aksi') ?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kategori Gadget</label>
                            <input type="hidden" name="id_gadget" value="<?php echo $gd->id_gadget  ?>">
                            <select name="kode_kategori" class="form-control">
                                <option value="<?php echo $gd->kode_kategori?>"><?php echo $gd->kode_kategori ?></option>
                                <?php foreach($kategori as $kt) : ?>
                                    <option value="<?php echo $kt->kode_kategori ?>"><?php echo $kt->nama_kategori ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('kode_kategori','<div class="text-small text-danger">','</div>')?>
                        </div>

                        <div class="form-group">
                            <label>Merk</label>
                            <input type="text" name="merk" class= "form-control" value="<?php echo $gd->merk ?>">
                            <?php echo form_error('merk','<div class="text-small text-danger">','</div>')?>
                        </div>
                        
                        <div class="form-group">
                            <label>Tipe</label>
                            <input type="text" name="tipe" class= "form-control" value="<?php echo $gd->tipe ?>">
                            <?php echo form_error('tipe','<div class="text-small text-danger">','</div>')?>
                        </div> 

                        <div class="form-group">
                            <label>Prosesor</label>
                            <input type="text" name="prosesor" class= "form-control" value="<?php echo $gd->prosesor ?>">
                            <?php echo form_error('prosesor','<div class="text-small text-danger">','</div>')?>
                        </div>

                        <div class="form-group">
                            <label>RAM</label>
                            <input type="text" name="ram" class= "form-control" value="<?php echo $gd->ram ?>">
                            <?php echo form_error('ram','<div class="text-small text-danger">','</div>')?>
                        </div> 
                        
                        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                        <button type="reset" class="btn btn-danger mt-4">Reset</button>

                    </div>
                    <div class="col-md-6">

                        

                        <div class="form-group">
                            <label>Kamera</label>
                            <input type="text" name="kamera" class= "form-control" value="<?php echo $gd->kamera ?>">
                            <?php echo form_error('kamera','<div class="text-small text-danger">','</div>')?>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option <?php if($gd->status == "1"){
                                    echo "selected='selected'"; } 
                                    echo $gd->status; ?> value="1">Tersedia</option>
                                <option <?php if($gd->status == "0"){
                                    echo "selected='selected'"; } 
                                    echo $gd->status; ?> value="0">Tidak tersedia</option>
                            </select>
                            <?php echo form_error('status','<div class="text-small text-danger">','</div>')?>
                        </div>
                        
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control"value="<?php echo $gd->harga ?>">
                            <?php echo form_error('harga','<div class="text-small text-danger">','</div>')?>
                        </div>
                    
                        <div class="form-group">
                            <label>Denda</label>
                            <input type="text" name="denda" class="form-control"value="<?php echo $gd->denda ?>">
                            <?php echo form_error('denda','<div class="text-small text-danger">','</div>')?>
                        </div>

                        
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>

                    </div>
                </div>
                
                </form>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
