<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Form Input Data Gadget</h1>
        </div>
    </section>
    <?php foreach($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img width="400px" src="<?php echo base_url().'assets/upload/'. $dt->gambar ?>">
                    </div>
                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <td>Kategori Gadget</td>
                                <td>
                                <?php 
                                    if ($dt->kode_kategori == "SMP"){
                                        echo "Smartphone";
                                    }elseif ($dt->kode_kategori == "LTP"){
                                        echo "Laptop";
                                    }elseif ($dt->kode_kategori == "TBT"){
                                        echo "Tablet";
                                    }elseif ($dt->kode_kategori == "SMW"){
                                        echo "Smartwatch";
                                    }elseif ($dt->kode_kategori == "CMP"){
                                        echo "Computer";
                                    }elseif ($dt->kode_kategori == "CMR"){
                                        echo "Camera";
                                    }else{
                                        echo "<span class='text-danger'>Kategori gadget belum terdaftar</span>";
                                    }
                                ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Merk</td>
                                <td><?php echo $dt->merk ?></td>
                            </tr>

                            <tr>
                                <td>Tipe</td>
                                <td><?php echo $dt->tipe ?></td>
                            </tr>

                            <tr>
                                <td>Prosesor</td>
                                <td><?php echo $dt->prosesor ?></td>
                            </tr>

                            <tr>
                                <td>RAM</td>
                                <td><?php echo $dt->ram ?></td>
                            </tr>
                         
                            <tr>
                                <td>Kamera</td>
                                <td><?php echo $dt->kamera ?></td>
                            </tr>

                            <tr>
                                <td>Harga</td>
                                <td><?php echo $dt->harga ?></td>
                            </tr>

                            <tr>
                                <td>Denda</td>
                                <td><?php echo $dt->denda ?></td>
                            </tr>

                            <tr>
                                <td>Status</td>
                                <td><?php 
                                    if($dt->status == "0"){
                                        echo"<span class='badge badge-danger'>Tidak tersedia</span>";

                                    }else{
                                        echo"<span class='badge badge-primary'>Tersedia</span>";
                                    }
                                    ?>
                                </td>
                            </tr>

                        </table>
                        <a class="btn btn-lg btn-danger mr-md-2" href="<?php echo base_url('admin/data_gadget/') ?>">Kembali</a>
                        <a class="btn btn-lg btn-warning" href="<?php echo base_url('admin/data_gadget/update_gadget/'.$dt->id_gadget) ?>">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
