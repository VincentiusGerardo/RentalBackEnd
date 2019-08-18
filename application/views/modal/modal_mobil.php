<!-- Modal Add -->
<div class="modal fade" id="modelAdd">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Mobil</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?= base_url('Source/do/doInsertMobil') ?>" method="post">
          <div class="form-group">
            <label for="">Nama Mobil</label>
            <input type="text" class="form-control" name="namaM">
          </div>
          <div class="form-group">
            <label for="">Harga</label>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text">Rp.</span>
                  </div>
                  <input type="text" class="form-control number" name="hargaM">
              </div>
          </div>
          <div class="form-group">
            <label for="">Kapasitas</label>
            <input type="number" class="form-control" name="kap">
          </div>
          <div class="form-group">
            <label for="">Bagasi</label>
            <input type="number" class="form-control" name="bag">
          </div>
          <div class="form-group">
            <label for="">Tahun Keluaran</label>
            <input type="text" class="form-control" name="thn" maxlength="4">
          </div>
          <div class="form-group">
            <label for="">Tarif Driver</label>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text">Rp.</span>
                  </div>
                  <input type="text" class="form-control number" name="tarif">
              </div>
          </div>
          <div class="form-group">
            <label for="">Jenis Mobil</label>
            <input type="text" class="form-control" name="jenis">
          </div>
          <div class="form-group">
            <label for="">Warna</label>
            <input type="text" class="form-control" name="warna">
          </div>
          <div class="form-group">
              <label for="">Foto</label>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="gambar" accept="image/*">
                  <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
          </div>
          <div class="form-group">
            <label for="">Transmisi</label>
            <input type="text" class="form-control" name="trans">
          </div>
          <div class="form-group">
            <label for="">Bahan Bakar</label>
            <input type="text" class="form-control" name="bbm">
          </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

    </div>
  </div>
</div>
<?php foreach($mobil as $m){ ?>
<!-- Modal Edit -->
<div class="modal fade" id="modalEdit<?= $m->ID_Mobil ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit <?= $m->Nama ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="modalDelete<?= $m->ID_Mobil ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete <?= $m->Nama ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- Modal View Image -->
<div class="modal fade" id="modalView<?= $m->ID_Mobil ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">View <?= $m->Nama ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- Modal Upload Image -->
<div class="modal fade" id="modalUpload<?= $m->ID_Mobil ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Upload Image <?= $m->Nama ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<?php } ?>