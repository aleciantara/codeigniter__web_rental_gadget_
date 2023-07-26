<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Kategori Gadget</h1>
        </div>

       <?php foreach($kategori as $kt): ?>
        <form method="POST" action="<?php echo base_url('admin/data_kategori/update_kategori_aksi') ?>" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Kode Kategori</label>
                    <input type="hidden" name="id_kategori" value="<?php echo $kt->id_kategori ?>">
                    <input type="text" name="kode_kategori" class= "form-control" value="<?php echo $kt->kode_kategori ?>">
                    <?php echo form_error('kode_kategori','<div class="text-small text-danger">','</div>')?>
                </div>

                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" name="nama_kategori" class= "form-control" value="<?php echo $kt->nama_kategori ?>">
                    <?php echo form_error('nama_kategori','<div class="text-small text-danger">','</div>')?>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            
        </form>
        <?php endforeach; ?>
        
    </section>
</div>
