<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Data Gadget</h1>
        </div>

        <a href="<?php echo base_url('admin/data_gadget/tambah_gadget') ?>"class="btn btn-lg btn-primary mb-3">Tambah Data</a>
        <?php echo $this->session->flashdata('pesan') ?>
        
        <table class="table table-hover table-striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Kode Kategori</th>
                    <th>Merk</th>
                    <th>Tipe</th>
                    <th>Harga</th>
                    <th>Denda</th>
                    <!-- <th>Prosesor</th>
                    <th>RAM</th>
                    <th>Kamera</th> -->
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>  
            <tbody>
                <?php 
                    $no=1;
                    foreach($gadget as $gd) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td>
                            <img width="60px" src="<?php echo base_url().'assets/upload/'.$gd->gambar ?>">
                        </td>
                        <td><?php echo $gd->kode_kategori ?></td>
                        <td><?php echo $gd->merk ?></td>
                        <td><?php echo $gd->tipe?></td>
                        <td><?php echo $gd->harga ?></td>
                        <td><?php echo $gd->denda ?></td>
                        <!-- <td><?php echo $gd->prosesor ?></td>
                        <td><?php echo $gd->ram ?></td>
                        <td><?php echo $gd->kamera ?></td> -->
                        
                        
                        <td><?php 
                        if ($gd->status == "0") {
                            echo "<span class='badge badge-danger'>Tidak tersedia</span>";
                        }else {
                            echo "<span class='badge badge-primary'>Tersedia</span>";
                        }
                        ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/data_gadget/detail_gadget/').$gd->id_gadget ?>"
                             class="btn btn-sm btn-success "><i class="fas fa-eye"></i></a>

                            <a href="<?php echo base_url('admin/data_gadget/update_gadget/').$gd->id_gadget ?>"
                            class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            
                            <a href="<?php echo base_url('admin/data_gadget/delete_gadget/').$gd->id_gadget ?>" 
                            class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody> 
        </table>   
    </section>
</div>

