<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Data Kategori Gadget</h1>
        </div>
    </div>

    <a href="<?php echo base_url('admin/data_kategori/tambah_kategori') ?>" class="btn btn-lg btn-primary mb-3">Tambah Kategori</a>

    <?php echo $this->session->flashdata('pesan') ?>

    <table class="table table-bordered table-triped table-hover">
        <thead>
            <tr>
                <th width="20px">No.</th>
                <th>Kode kategori</th>
                <th>Nama Kategori</th>
                <th width="180px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($kategori as $kt): ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $kt->kode_kategori ?></td>
                    <td><?php echo $kt->nama_kategori ?></td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_kategori/update_kategori/'.$kt->id_kategori) ?>">
                        <i class="fas fa-edit"></i></a>

                        <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_kategori/delete_kategori/'.$kt->id_kategori) ?>">
                        <i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>