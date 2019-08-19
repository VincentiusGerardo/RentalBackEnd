<script>
$(function(){
    $("#tablePelanggan").bootstrapTable({
        columns: [
            {
                title: 'ID Pelanggan',
                align: 'center'
            }, {
                title: 'Nama Pelanggan',
                align: 'center'
            }, {
                title: 'Jenis Kelamin',
                align: 'center'
            }, {
                title: 'Nomor Induk Kependudukan',
                align: 'center'
            }, {
                title: 'Alamat',
                halign: 'center',
                align: 'left'
            }, {
                title: 'Tanggal Lahir',
                align: 'center'
            }, {
                title: 'E-mail',
                align: 'center'
            }, {
                title: 'Nomor HP',
                align: 'center'
            }
        ]
    });
});
</script>
<h2 class="card-title">Pelanggan</h2>
<hr>

<table id="tablePelanggan" class="tables" data-height="450">
  <tbody>
    <?php foreach($pelanggan as $p){ ?>
    <tr>
      <td><?= $p->ID_Pelanggan ?></td>
      <td><?= $p->NamaPelanggan ?></td>
      <td><?= $p->JK ?></td>
      <td><?= $p->NIK ?></td>
      <td><?= $p->Alamat ?></td>
      <td><?= date("d F Y",strtotime($p->TanggalLahir)) ?></td>
      <td><?= $p->Email ?></td>
      <td><?= $p->NomorHP ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>