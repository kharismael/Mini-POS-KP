<div class="modal fade" id="finishModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Selesai Penjualan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="#" id="finish-sale-form" method="post">
          <div class="modal-body">
                  @csrf
                  <img src="{{asset('template')}}/img/confirmation.png" alt="confirmation" class="mx-auto d-block"><br>
                  <span class="text-center">Yakin menyelesaikan transaksi? </span>
                  <span class="text-center"><br>Transaksi yang telah diselesaikan tidak dapat diubah lagi</span><br>
          </div>
          <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-dark" value="delete">Finish Penjualan</button>
          </div>
      </form>
      </div>
    </div>
  </div>