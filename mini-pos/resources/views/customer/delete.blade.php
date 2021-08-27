<div class="modal fade" id="deleteCust" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Delete Customer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="#" id="delete-product-form" method="post">
          <div class="modal-body">
                  @method('DELETE')
                  @csrf
                  <img src="{{asset('template')}}/img/confirmation.png" alt="confirmation" class="mx-auto d-block"><br>
                  <span class="text-center">Yakin menghapus item : </span>
                  <b><span class="text-center span-delete"></span></b>
                  <span class="text-center"> ? <br> Data yang telah dihapus tidak akan dikembalikan lagi</span><br>
          </div>
          <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-dark" value="delete">Hapus Customer</button>
          </div>
      </form>
      </div>
    </div>
  </div>