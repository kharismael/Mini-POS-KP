<div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Batal Penjualan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="#" id="cancel-sale-form" method="post">
          <div class="modal-body">
                  @method('DELETE')
                  @csrf
                  <img src="{{asset('template')}}/img/confirmation.png" alt="confirmation" class="mx-auto d-block"><br>
                  <span class="text-center">Yakin membatalkan transaksi? </span>
                  <span class="text-center"><br>Transaksi yang telah dibatalkan tidak dapat dikembalikan lagi</span><br>
          </div>
          <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-dark" value="delete">Batalkan Penjualan</button>
          </div>
      </form>
      </div>
    </div>
  </div>