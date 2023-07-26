<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Konfirmasi Pembayaran</h1>
        </div>
        <center style="width:36%;" class="card">
            <div class="card-header">
                Konfirmasi Pembayaran
            </div>
            <form method="POST" action="<?php echo base_url('admin/data_transaksi/cek_pembayaran')?>">
            <div class="card-body">
                <?php foreach($pembayaran as $pmb): ?>
                    <a class="btn  btn-success" href="<?php echo base_url('admin/data_transaksi/download_pembayaran/'.$pmb->id_rental)?>"><i class="fas fa-download"></i> Download Bukti Pembayaran</a>
                    <div class="custom-control custom-switch mt-4">
                        <input type="hidden" class="custom-control-input" value="<?php echo  $pmb->id_rental ?>" name="id_rental">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="status_pembayaran">
                        <label class="custom-control-label" for="customSwitch1">konfirmasi Pembayaran</label>
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                
                <?php endforeach; ?>

            </div>
            </form>
            </center>
    </section>
</div>

