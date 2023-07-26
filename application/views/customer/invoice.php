<table class="table" style="width:50%;">
<h2>Invoice Pembayaran</h2>
                    
    <?php foreach($transaksi as $tr): ?>
        <tr>
            <td>Nama Pemesan</td>
            <td>:</td>
            <td><?php echo $tr->nama ?></td>
        </tr>

        <tr>
            <td>Merk Gadget</td>
            <td>:</td>
            <td><?php echo $tr->merk?></td>
        </tr>

        <tr>
            <td>Tipe Gadget</td>
            <td>:</td>
            <td><?php echo $tr->tipe?></td>
        </tr>

        <tr>
            <td>Tanggal Rental</td>
            <td>:</td>
            <td><?php echo $tr->tanggal_rental?></td>
        </tr>

        <tr>
            <td>Tanggal Kembali</td>
            <td>:</td>
            <td><?php echo $tr->tanggal_kembali?></td>
        </tr>

        <tr>
            <td>Harga Sewa/Hari</td>
            <td>:</td>
            <td>Rp<?php echo number_format($tr->harga,0,',','.')?></td>
        </tr>

        <tr>
            <?php
                $x = strtotime($tr->tanggal_kembali);
                $y = strtotime($tr->tanggal_rental);
                $jmlHari = abs(($x - $y)/(60*60*24)+1);
            ?>
            <td>Jumlah Sewa/Hari</td>
            <td>:</td>
            <td><?php echo $jmlHari?> Hari</td>
        </tr>

        <tr>
            <td>Status Pembayaran</td>
            <td>:</td>
            <td>
                <?php 
                    if($tr->status_pembayaran == '0'){
                        echo "Belum Lunas";
                    }else{
                        echo "Lunas";
                    }
                ?>
        </tr>
        
        <tr style="font-weight:bold;" class="text-warning">
            <td>TOTAL PEMBAYARAN</td>
            <td>:</td>
            <td>Rp<?php echo number_format($tr->harga * $jmlHari,0,',','.')?> </td>
        </tr>

        <?php endforeach; ?>

</table>

<script type="text/javascript">
    window.print();
</script>