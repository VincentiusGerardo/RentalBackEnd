<script>
$(function(){
    $("#tableMobil").bootstrapTable({
        columns: [
            {
                title: 'No',
                align: 'center'
            }, {
                title: 'Nama Product',
                halign: 'center',
                align: 'left'
            }, {
                title: 'Keterangan',
                halign: 'center',
                align: 'left'
            }, {
                title: 'Harga',
                align: 'center'
            }, {
                title: 'Gambar',
                align: 'center'
            }, {
                title: 'Action',
                align: 'center'
            }
        ]
    });
});
</script>
<h2 class="card-title">Mobil</h2>
<hr>

<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelAdd">
<i class='fa fa-plus'></i> Add
</button>

<table id="tableMobil" class="tables" data-height="340">
  <tbody>
    <!-- <?php $i = 1; foreach($pro as $p){ ?>
    <tr>
      <td><?= $i ?></td>
      <td><?= $p->NamaProduct ?></td>
      <td><?= $p->Keterangan ?></td>
      <td>Rp. <?= number_format($p->Harga,2,',','.') ?></td>
      <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalGambar<?= $p->ID_Product; ?>">View</button></td>
      <td>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit<?= $p->ID_Product; ?>" data-toggle="tooltip" title="Edit <?= $p->NamaProduct ?>"><i class='fa fa-edit'></i></button>
          &nbsp;
          <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalUpload<?= $p->ID_Product; ?>" data-toggle="tooltip" title="Upload <?= $p->NamaProduct ?>"><i class='fa fa-upload'></i></button>
          &nbsp;
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete<?= $p->ID_Product; ?>" data-toggle="tooltip" title="Delete <?= $p->NamaProduct ?>"><i class='fa fa-trash'></i></button>
      </td>
    </tr>
    <?php $i++; } ?> -->
  </tbody>
</table>