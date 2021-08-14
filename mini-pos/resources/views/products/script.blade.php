

                    
@section('scripts')
<script>

    @if($errors->has('name') || $errors->has('sku') || $errors->has('cost') || $errors->has('price'))
        $('#createModal').modal('show')
    @endif

    setTimeout(function() {
        $('.alert').fadeOut('slow');}, 3000
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