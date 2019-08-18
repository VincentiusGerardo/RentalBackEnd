<script>
  $(function(){
      $("#tableMobil").bootstrapTable({
          columns: [
              {
                  title: 'No',
                  align: 'center'
              }, {
                  title: 'Nama Mobil',
                  halign: 'center',
                  align: 'left'
              }, {
                  title: 'Harga',
                  align: 'center'
              }, {
                  title: 'Kapasitas',
                  align: 'center'
              }, {
                  title: 'Bagasi',
                  align: 'center'
              }, {
                  title: 'Tahun Keluaran',
                  align: 'center'
              }, {
                  title: 'Tarif Driver',
                  align: 'center'
              }, {
                  title: 'Jenis Mobil',
                  align: 'center'
              }, {
                  title: 'Warna',
                  align: 'center'
              }, {
                  title: 'Foto',
                  align: 'center'
              }, {
                  title: 'Transmisi',
                  align: 'center'
              }, {
                  title: 'Bahan Bakar',
                  align: 'center'
              }, {
                  title: 'Status Pinjam',
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
    <?php $i = 1; foreach($mobil as $m){ ?>
    <tr>
      <td><?= $i ?></td>
      <td><?= $m->Nama ?></td>
      <td>Rp. <?= number_format($m->Harga,2,',','.') ?></td>
      <td><?= $m->Kapasitas ?> orang</td>
      <td><?= $m->Bagasi ?></td>
      <td><?= $m->TahunKeluaran ?></td>
      <td>Rp. <?= number_format($m->TarifDriver,2,',','.') ?></td>
      <td><?= $m->ID_JenisMobil ?></td>
      <td><?= $m->Warna ?></td>
      <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalView<?= $m->ID_Mobil; ?>" data-toggle="tooltip" title="View <?= $m->Nama ?>">View</button></td>
      <td><?= $m->Transmisi ?></td>
      <td><?= $m->BahanBakar ?></td>
      <td><?= $m->StatusPinjam ?></td>
      <td>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit<?= $m->ID_Mobil; ?>" data-toggle="tooltip" title="Edit <?= $m->Nama ?>"><i class='fa fa-edit'></i></button>
          &nbsp;
        <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalUpload<?= $m->ID_Mobil; ?>" data-toggle="tooltip" title="Upload <?= $m->Nama ?>"><i class='fa fa-upload'></i></button>
          &nbsp;
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete<?= $m->ID_Mobil; ?>" data-toggle="tooltip" title="Delete <?= $m->Nama ?>"><i class='fa fa-trash'></i></button>
      </td>
    </tr>
    <?php $i++; } ?>
  </tbody>
</table>