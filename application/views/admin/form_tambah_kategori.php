<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Form Tambah Kategori Gadget</h1>
        </div>

        <form method="POST" action="<?php echo base_url('admin/data_kategori/tambah_kategori_aksi') ?>">
            <div class="form-group">
                <label>Kode Kategotri</label>
                <input type="text" name="kode_kategori" class="form-control">
                <?php echo form_error('kode_kategori', '<div class="text-small text-danger">','</div>')?>
            </div>

            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control">
                <?php echo form_error('nama_kategori', '<div class="text-small text-danger">','</div>' )?>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        
        </form>

    </section>
</div>
