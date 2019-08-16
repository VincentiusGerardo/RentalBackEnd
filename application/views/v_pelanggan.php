<script>
$(function(){
    $("#tablePelanggan").bootstrapTable({
        columns: [
            {
                title: 'ID Pelanggan',
                align: 'center'
            }, {
                title: 'Nama Pelanggan',
                halign: 'center',
                align: 'left'
            }, {
                title: 'Tanggal Lahir',
                align: 'center'
            }, {
                title: 'E-mail',
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
      <td><?= date("d F Y",strtotime($p->TanggalLahir)) ?></td>
      <td><?= $p->Email ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>