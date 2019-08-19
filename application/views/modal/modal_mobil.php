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
        <form action="<?= base_url('Source/do/doInsertMobil') ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="">Nama Mobil</label>
            <input type="text" class="form-control" name="namaM">
          </div>
          <div class="form-group">
            <label for="">Plat Nomor</label>
            <input type="text" class="form-control" name="plat" maxlength="10">
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
            <input type="number" class="form-control" name="kap" min="2">
          </div>
          <div class="form-group">
            <label for="">Bagasi</label>
            <input type="number" class="form-control" name="bag" min="1">
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
            <select class="selectpicker form-control" title="Select Jenis Mobil" name="jenis">
            <?php foreach($jenis as $j){ ?>
              <option value="<?= $j->ID_JenisMobil ?>"><?= $j->JenisMobil ?></option>
            <?php } ?>
            </select>
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
            <select class="selectpicker form-control" title="Select Transmisi" name="trans">
              <option value="Automatic">Matik</option>
              <option value="Manual">Manual</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Bahan Bakar</label>
            <select class="selectpicker form-control" title="Select Bahan Bakar" name="bbm">
              <option value="Bensin">Bensin</option>
              <option value="Solar">Solar</option>
            </select>
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
        <h4 class="modal-title">Edit <?= $m->NamaMobil ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?= base_url('Source/do/doUpdateMobil') ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="ide" value="<?= $m->ID_Mobil ?>">
        <div class="form-group">
          <label for="">Nama Mobil</label>
          <input type="text" class="form-control" name="namaME" value="<?= $m->NamaMobil ?>">
        </div>
        <div class="form-group">
          <label for="">Plat Nomor</label>
          <input type="text" class="form-control" name="platE" maxlength="10" value="<?= $m->PlatNomor ?>">
        </div>
        <div class="form-group">
          <label for="">Harga</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                </div>
                <input type="text" class="form-control number" name="hargaME" value="<?= $m->Harga ?>">
            </div>
        </div>
        <div class="form-group">
          <label for="">Kapasitas</label>
          <input type="number" class="form-control" name="kapE" min="2" value="<?= $m->Kapasitas ?>">
        </div>
        <div class="form-group">
          <label for="">Bagasi</label>
          <input type="number" class="form-control" name="bagE" min="1" value="<?= $m->Bagasi ?>">
        </div>
        <div class="form-group">
          <label for="">Tahun Keluaran</label>
          <input type="text" class="form-control" name="thnE" maxlength="4" value="<?= $m->TahunKeluaran ?>">
        </div>
        <div class="form-group">
          <label for="">Tarif Driver</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                </div>
                <input type="text" class="form-control number" name="tarifE" value="<?= $m->TarifDriver ?>">
            </div>
        </div>
        <div class="form-group">
          <label for="">Jenis Mobil</label>
          <select class="selectpicker form-control" title="Select Jenis Mobil" name="jenisE">
          <?php foreach($jenis as $j){ ?>
            <option value="<?= $j->ID_JenisMobil ?>" <?php if($m->ID_JenisMobil == $j->ID_JenisMobil) echo 'selected'; ?>><?= $j->JenisMobil ?></option>
          <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="">Warna</label>
          <input type="text" class="form-control" name="warnaE" value="<?= $m->Warna ?>">
        </div>
        <div class="form-group">
          <label for="">Transmisi</label>
          <select class="selectpicker form-control" title="Select Transmisi" name="transE">
            <option value="Automatic" <?php if($m->Transmisi == "Automatic") echo 'selected'; ?>>Matik</option>
            <option value="Manual" <?php if($m->Transmisi == "Manual") echo 'selected'; ?>>Manual</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Bahan Bakar</label>
          <select class="selectpicker form-control" title="Select Bahan Bakar" name="bbmE">
            <option value="Bensin" <?php if($m->BahanBakar == "Bensin") echo 'selected'; ?>>Bensin</option>
            <option value="Solar" <?php if($m->BahanBakar == "Solar") echo 'selected'; ?>>Solar</option>
          </select>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Update</button>
        </form>
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
        <h4 class="modal-title">Delete <?= $m->NamaMobil ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="<?= base_url('Source/do/doDeleteMobil') ?>" method="post">
      <input type="hidden" name="idd" value="<?= $m->ID_Mobil ?>">
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

<!-- Modal View Image -->
<div class="modal fade" id="modalView<?= $m->ID_Mobil ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">View <?= $m->NamaMobil ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <img src="<?= $m->PhotoURL == null? base_url('media/nopics.png'): base_url('media/mobil/' . $m->PhotoURL) ?>" class="img-fluid imageModal">
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
        <h4 class="modal-title">Upload Image <?= $m->NamaMobil ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?= base_url('Source/do/doUploadImageMobil') ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="ide" value="<?= $m->ID_Mobil ?>">
        <input type="hidden" name="nama" value="<?= $m->PhotoURL ?>">
        <div class="form-group">
            <label for="">Foto</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="gambar" accept="image/*">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Upload</button>
        </form>
      </div>

    </div>
  </div>
</div>


<?php } ?>