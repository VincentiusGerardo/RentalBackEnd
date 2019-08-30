<!-- Modal Add -->
<div class="modal fade" id="modelAdd">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Jenis Mobil</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="<?= base_url('Source/do/doInsertJenisMobil') ?>" method="post">
        <div class="form-group">
        <label for="">Jenis Mobil</label>
        <input type="text" class="form-control" name="jenisM">
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>

    </div>
  </div>
</div>
<?php foreach($jenis as $j){ ?>
<!-- Modal Edit -->
<div class="modal fade" id="modalEdit<?= $j->ID_JenisMobil ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit <?= $j->JenisMobil ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="<?= base_url('Source/do/doUpdateJenisMobil') ?>" method="post">
      <input type="hidden" name="ide" value="<?= $j->ID_JenisMobil ?>">
        <div class="form-group">
        <label for="">Jenis Mobil</label>
        <input type="text" class="form-control" name="jenisMe" value="<?= $j->JenisMobil ?>">
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Edit</button>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="modalDelete<?= $j->ID_JenisMobil ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete <?= $j->JenisMobil ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="<?= base_url('Source/do/doDeleteJenisMobil') ?>" method="post">
      <input type="hidden" name="idd" value="<?= $j->ID_JenisMobil ?>">
        <h1 class="textTengah">Are You Sure?</h1>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Delete</button>
        </form>
      </div>

    </div>
  </div>
</div>
<?php } ?>