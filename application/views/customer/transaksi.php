<div class="container">
        <?php if($this->session->userdata('username')) { ?>
            <div class="card mx-auto" style="margin-top:100px; margin-bottom:100px; width:90%;">
            <div style="font-size: 30px; color:dark-grey;" class="card-header">        
                Transaksi Anda
            </div>
            <span class="mt-2 p-2"><?php echo $this->session->flashdata('pesan') ?></span>
            <div class="card-body">
            <table class="table table-bordered table-striped mt-2">
                <tr>
                    <th>No.</th>
                    <th>Merk</th>
                    <th>Tipe</th>
                    <th>Harga Rental</th>
                    <th>Tanggal Rental</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Aksi</th>
                    <th>Batal</th>
                </tr>

                <?php $no=1; foreach($transaksi as $tr): ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $tr->merk?></td>
                        <td><?php echo $tr->tipe?></td>
                        <td>Rp <?php echo number_format($tr->harga,0,',','.')?></td>
                        <td><?php echo $tr->tanggal_rental?></td>
                        <td><?php echo $tr->tanggal_kembali?></td>
                        <td><?php echo $tr->status_rental?></td>
                        <td>
                            <?php if($tr->status_rental == "Selesai") {?>
                                <a class="btn btn-sm btn-warning" href="<?php echo base_url('customer/dashboard/detail_gadget/'.$tr->id_gadget)?>" class="btn btn-warning ">Rental Lagi</a>
                            <?php }else{ ?>
                                <a class="btn btn-sm btn-success" href="<?php echo base_url('customer/transaksi/pembayaran/'.$tr->id_rental)?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                            <?php }?>
                        </td>
                        <td>
                        <?php if($tr->status_rental == "Selesai") {?>
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Batal
                            </button>
                        <?php }else{ ?>
                            <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin membatalkan transaksi?')" href="<?php echo base_url('customer/transaksi/batal_transaksi/'.$tr->id_rental) ?>">Batal</a>
                        <?php }?>


                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php }else{ ?>
            <div class="card" style="margin-top: 50px; margin-bottom:400px;">
            <div style="font-size: 26px; color:dark-grey;" class="card-header">
                Mohon Melakukan Login Terlebih Dahulu
            </div>
            <?php }?>
        </div>
    </div>
</div>

<!-- Modal Batal Transaksi -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi Batal Transaksi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Maaf, transaksi yang telah selesai tidak dapat dibatalkan
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>