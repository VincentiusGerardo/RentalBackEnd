<script>
$(function(){
    $("#tablePelanggan").bootstrapTable({
        columns: [
            {
                title: 'No',
                align: 'center'
            }, {
                title: 'Jenis Mobil',
                align: 'center'
            }, {
                title: 'Action',
                align: 'center'
            }
        ]
    });
});
</script>
<h2 class="card-title">Jenis Mobil</h2>
<hr>

<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelAdd">
<i class='fa fa-plus'></i> Add
</button>

<table id="tablePelanggan" class="tables" data-height="450">
  <tbody>
    <?php $i = 1; foreach($jenis as $j){ ?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $j->Jenis ?></td>
        <td>
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit<?= $j->ID_JenisMobil; ?>" data-toggle="tooltip" title="Edit <?= $j->Jenis ?>"><i class='fa fa-edit'></i></button>
            &nbsp;
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete<?= $j->ID_JenisMobil; ?>" data-toggle="tooltip" title="Delete <?= $j->Jenis ?>"><i class='fa fa-trash'></i></button>
      </td>
    </tr>
    <?php $i++; } ?>
  </tbody>
</table>