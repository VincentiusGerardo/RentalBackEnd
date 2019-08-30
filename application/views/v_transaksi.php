<script>
$(function(){
    $("#tablePelanggan").bootstrapTable({
        columns: [
            {
                title: 'No',
                align: 'center'
            }, {
                title: 'Pelanggan',
                align: 'center'
            }, {
                title: 'Mobil',
                align: 'center'
            }, {
                title: 'Tanggal Booking',
                align: 'center'
            }, {
                title: 'Waktu Ambil',
                align: 'center'
            }, {
                title: 'Waktu Kembali',
                align: 'center'
            }, {
                title: 'Biaya',
                align: 'center'
            }, {
                title: 'Bukti Pembayaran',
                align: 'center'
            }, {
                title: 'Status Pembayaran',
                align: 'center'
            }, {
                title: 'Validasi Oleh',
                align: 'center'
            }
        ]
    });
});
</script>
<h2 class="card-title">Transaksi</h2>
<hr>

<table id="tablePelanggan" class="tables" data-height="450">
  <tbody>
    <?php foreach($transaksi as $t){ ?>
    <tr>
      <td><?= $t->ID_Rental ?></td>
      <td><?= $t->NamaPelanggan ?></td>
      <td><?= $t->NamaMobil ?></td>
      <td><?= date("d F Y",strtotime($t->TanggalBooking)) ?></td>
      <td><?= date("d F Y H:i:s",strtotime($t->WaktuAmbil)) ?></td>
      <td><?= date("d F Y H:i:s",strtotime($t->WaktuKembali)) ?></td>
      <td>Rp. <?= number_format($t->Biaya,2,',','.') ?></td>
      <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalView<?= $t->ID_Rental ?>" data-toggle="tooltip" title="Lihat Bukti">View</button></td>
      <td><?php if($t->StatusPembayaran == "N") echo "Pending"; else if($t->StatusPembayaran == "D") echo "Declined"; else echo "Lunas"; ?></td>
      <?php if($t->ValidasiOleh == null){ ?>
        <td>
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalAccept<?= $t->ID_Rental ?>">Accept</button>
            &nbsp;
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDecline<?= $t->ID_Rental ?>">Decline</button>
        </td>
      <?php }else{ ?>
        <td><?= $this->mAdmin->getUserName($t->ValidasiOleh); ?></td>
      <?php } ?>
    </tr>
    <?php } ?>
  </tbody>
</table>
