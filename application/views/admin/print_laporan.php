<h3 style="text-align: center">Laporan Transaksi Rental Gadget</h3>
<table>
	<tr>
		<td>Dari Tanggal</td>
		<td>:</td>
		<td><?php echo date('d-M-Y', strtotime($_GET['dari'])); ?></td>
	</tr>
	<tr>
		<td>Sampai Tanggal</td>
		<td>:</td>
		<td><?php echo date('d-M-Y', strtotime($_GET['sampai'])); ?></td>
	</tr>
</table>

<table class="table table table-bordered table-striped">
    <tr>
        <th>No</th>
        <th>Customer</th>
        <th>Merk</th>
        <th>Tipe</th>
        <th>Tgl. Rental</th>
        <th>Tgl. Kembali</th>
        <th>Harga/hari</th>
        <th>Denda/hari</th>
        <th>Total Harga</th>
        <th>Total Denda</th>
        <th>Tanggal Dikembalikan</th>
        <th>Status Pengembalian</th>
        <th>Status Rental</th>
    <tr>

    <?php $no=1;
    foreach($laporan as $tr) : ?>

        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $tr->nama ?></td>
            <td><?php echo $tr->merk ?></td>
            <td><?php echo $tr->tipe ?></td>
            <td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental)) ; ?></td>
            <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)) ; ?></td>
            <td>Rp. <?php echo number_format($tr->harga,0,',','.')?></td>
            <td>Rp. <?php echo number_format($tr->denda,0,',','.')?></td>
            <td>Rp. <?php echo number_format($tr->total_harga,0,',','.')?></td>
            <td>Rp. <?php echo number_format($tr->total_denda,0,',','.')?></td>
            <td>
                <?php

                    if($tr->tanggal_pengembalian == "0000-00-00"){
                        echo "-";
                    }else{
                        echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
                    }
                ?>
            </td>
            <td><?php echo $tr->status_pengembalian ?></td>
            <td class="text"><?php echo $tr->status_rental ?></td>

            
        </tr>
    <?php endforeach;?>
</table>

<script type="text/javascript">
       window.print();
</script>