<div class="container mt-5 mb-5">
    <div class="row">
        <dilv class="col-md-8">
            <div style="font-size: 18px; color:dark-grey;" class="card-header">
                Invoice Pembayaran Anda
            </div>
            <div class="card-body">
                <table class="table">
                    
                    <?php foreach($transaksi as $tr): ?>
                        <tr>
                            <th>Merk Gadget</th>
                            <td>:</td>
                            <td><?php echo $tr->merk?></td>
                        </tr>

                        <tr>
                            <th>Tipe Gadget</th>
                            <td>:</td>
                            <td><?php echo $tr->tipe?></td>
                        </tr>

                        <tr>
                            <th>Tanggal Rental</th>
                            <td>:</td>
                            <td><?php echo $tr->tanggal_rental?></td>
                        </tr>

                        <tr>
                            <th>Tanggal Kembali</th>
                            <td>:</td>
                            <td><?php echo $tr->tanggal_kembali?></td>
                        </tr>

                        <tr>
                            <th>Harga Sewa/Hari</th>
                            <td>:</td>
                            <td>Rp<?php echo number_format($tr->harga,0,',','.')?></td>
                        </tr>

                        <tr>
                            <?php
                                $x = strtotime($tr->tanggal_kembali);
                                $y = strtotime($tr->tanggal_rental);
                                $jmlHari = abs(($x - $y)/(60*60*24));
                            ?>
                            <th>Jumlah Sewa/Hari</th>
                            <td>:</td>
                            <td><?php echo $jmlHari?> Hari</td>
                        </tr>
                        
                        <tr class="text-warning">
                            <th>TOTAL PEMBAYARAN</th>
                            <td>:</td>
                            <td><button class="btn btn-warning">Rp<?php echo number_format($tr->harga * $jmlHari,0,',','.')?></button></td>
                        </tr>

                        <?php endforeach; ?>

                </table>
                <a target="_blank" href="<?php echo base_url('customer/transaksi/cetak_invoice/'.$tr->id_rental)?>" class="btn  btn-dark mt-2 mb-2">Print Invoice</a>
            </div>
        </dilv>
        <div style="font-size: 18px; color:dark-grey;" class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Informasi Pembayaran
                </div>
                <div class="card-body">
                    <p style="font-size: 16px; margin-bottom:2px;">Silakan melakukan pembayaran ke Rekening Berikut</p>
                    <ul style="font-size: 14px;" class="list-group list-group-flush">
                        <li class="list-group-item">Bank Mandiri 1219832832874</li>
                        <li class="list-group-item">Bank BCA     1338382742398</li>
                        <li class="list-group-item">Bank BNI     1218378494783</li>
                    </ul>

                    <?php if(empty($tr->bukti_pembayaran)) {?>
                        <button style="width:100%" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Upload Bukti Pembayaran
                        </button>
                    <?php }elseif($tr->status_pembayaran == '0'){ ?>
                        <button style="width:100%" type="button" class="btn btn-warning">
                            Menunggu Konfirmasi
                        </button>
                    <?php }elseif($tr->status_pembayaran == '1'){ ?>
                        <button style="width:100%" type="button" class="btn btn-success">
                            Pembayaran Selesai
                        </button>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal bukti pembayaran -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label>Upload Bukti Pembayaran</label>
                <input type="hidden" name="id_rental" value="<?php echo $tr->id_rental ?>">
                <input type="file" name="bukti_pembayaran" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>

    </div>
  </div>
</div>
