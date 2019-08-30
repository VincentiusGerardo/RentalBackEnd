<?php foreach($transaksi as $t){ ?>
<!-- Modal View -->
<div class="modal fade" id="modalView<?= $t->ID_Rental ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Bukti Pembayaran</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <img src="<?= $t->BuktiPembayaran == null? base_url('media/nopics.png'): base_url('media/buktipembayaran/' . $t->BuktiPembayaran) ?>" class="img-fluid imageModal">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- Modal Accept -->
<div class="modal fade" id="modalAccept<?= $t->ID_Rental ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Accept Transaction</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="<?= base_url('Source/do/doValidasi') ?>" method="post">
      <input type="hidden" name="id" value="<?= $t->ID_Rental ?>">
      <input type="hidden" name="jawaban" value="Y">
        <h1 class="textTengah">Are You Sure?</h1>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Accept</button>
        </form>
      </div>

    </div>
  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="modalDecline<?= $t->ID_Rental ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Decline Transaction</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="<?= base_url('Source/do/doValidasi') ?>" method="post">
      <input type="hidden" name="id" value="<?= $t->ID_Rental ?>">
      <input type="hidden" name="jawaban" value="N">
        <h1 class="textTengah">Are You Sure?</h1>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Decline</button>
        </form>
      </div>

    </div>
  </div>
</div>
<?php } ?>