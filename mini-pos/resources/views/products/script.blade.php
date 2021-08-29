@section('scripts')
<script>
    $('.profit-count').on('input',function(){
        var price = document.getElementById('price').value;
        price = parseFloat(price);
        var cost = document.getElementById('cost').value;
        cost = parseFloat(cost);
        document.getElementById('profit_show').value = price - cost;
        if(price < cost)
             $('#profit_show').css("background-color","#f8b1b1")
        else
             $('#profit_show').css("background-color","#bcf8b1")
    });

    //keep modal if error
    @if($errors->has('name') || $errors->has('sku') || $errors->has('cost') || $errors->has('price'))
        $('#createModal').modal('show')
    @endif

    //tutup alert jika timeout
    setTimeout(function() {
        $('.alert').fadeOut('slow');}, 5000
    );

    $('.btn-delete').click(function() {
        $('#delete-product-form').attr('action', '{{ route('products.destroy', '') }}/' + $(this).data('id'))
        $('.span-delete').text($(this).data('sku') + ' / ' + $(this).data('name'));
    })

    $('.btn-edit').click(function() {
        $('#edit-product-form').attr('action', '{{ route('products.update', '') }}/' + $(this).data('id'))
        $('#edit-product-sku').val($(this).data('sku'))
        $('#edit-product-name').val($(this).data('name'))
        $('#edit-product-category').val($(this).data('category'))
        $('#edit-product-cost').val($(this).data('cost'))
        $('#edit-product-price').val($(this).data('price'))
        
    })
</script>
@endsection