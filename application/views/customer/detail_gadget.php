<div class="container mt-5 mb-5">

    <div class="card">
        <div class="gadget-body">
            <?php foreach($detail as $dt): ?>
                <div class="row">
                    <div class="col-md-6">
                        <img style=" width: 450px;" src="<?php echo base_url('assets/upload/'.$dt->gambar) ?>" alt="">
                    </div>
                    <div class="col-md-6 mt-4 ">
                        <h4 style="font-size:22px; class="text-dark"><?php echo $dt->merk ?></h4>
                        <h1 style="font-size:36px; margin-top:-2; margin-bottom:-6;"><?php echo $dt->tipe ?></h1>
                        <h3  class="text-warning font-weight-bold" class="product-grid__price" >Rp <?php echo number_format($dt->harga,0,',','.') ?>/Hari</h3>
                    <table class="table mt-5 mb-2">
                            <tr>
                                <th>Kategori Gadget</th>
                                <td>
                                <?php 
                                    if ($dt->kode_kategori      == "SMP"){
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
                                <th>Prosesor</th>
                                <td><?php echo $dt->prosesor ?></td>
                            </tr>

                            <tr>
                                <th>RAM</th>
                                <td><?php echo $dt->ram ?></td>
                            </tr>
                         
                            <tr>
                                <th>Kamera</th>
                                <td><?php echo $dt->kamera ?></td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td><?php 
                                    if($dt->status == "0"){
                                        echo"Tidak tersedia/ Sedang dirental";

                                    }else{
                                        echo"Tersedia";
                                    }
                                    ?>
                                </td>
                            </tr>

                        </table>
                       
                        <?php 
                            if ($dt->status == "0"){
                                echo"<span class='btn-danger product-grid__btn product-grid__add-to-cart mt-3 mb-4' style='pointer-events: none' disabled>Telah Dirental</span>";			
                            }else{
                                echo anchor("customer/rental/tambah_rental/".$dt->id_gadget, "<span class='btn-warning product-grid__btn product-grid__add-to-cart disable mt-3 mb-4'>Rental</span>");		
                            }                                        

                        ?>
                                
                        
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>