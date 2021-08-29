@section('scripts')
<script>
    setTimeout(function() {
        $('.alert').fadeOut('slow');}, 3000
    );

    $('.btn-delete').click(function() {
        $('#delete-supplier-form').attr('action', '{{ route('supplier.destroy', '') }}/' + $(this).data('id'))
        $('.span-delete').text($(this).data('name'));
    })

    $('.btn-edit').click(function() {
        $('#edit-sup-form').attr('action', '{{ route('supplier.update', '') }}/' + $(this).data('supplier_id'))
        $('#edit-supplier-name').val($(this).data('supplier_name'))
        $('#edit-supplier-telp').val($(this).data('supplier_telp'))
        $('#edit-supplier-address').val($(this).data('supplier_address'))
        $('#edit-supplier-email').val($(this).data('supplier_email'))
        $('#edit-supplier-prov').val($(this).data('province_id'))
        $('#edit-supplier-regency').val($(this).data('regency_id'))
        $('#edit-supplier-district').val($(this).data('district_id'))
        $('#edit-supplier-village').val($(this).data('village_id'))
    })
</script>


    <script>
        $(document).ready(function () {
            $('#province_id').change(function () {
                var $regency = $('#regency_id');
                $.ajax({
                    url: "{{ route('getRegency') }}",
                    data: {
                        province_id: $(this).val()
                    },
                    success: function (data) {
                        $regency.html('<option value="" selected>Choose Regency</option>');
                        $.each(data, function (id, value) {
                            $regency.append('<option value="' + id + '">' + value + '</option>');
                        });
                    }
                });
            });
            $('#regency_id').change(function () {
                var $district = $('#district_id');
                $.ajax({
                    url: "{{ route('getDistrict') }}",
                    data: {
                        regency_id: $(this).val()
                    },
                    success: function (data) {
                        $district.html('<option value="" selected>Choose District</option>');
                        $.each(data, function (id, value) {
                            $district.append('<option value="' + id + '">' + value + '</option>');
                        });
                    }
                });
            });
            $('#district_id').change(function () {
                var $village = $('#village_id');
                $.ajax({
                    url: "{{ route('getVillage') }}",
                    data: {
                        district_id: $(this).val()
                    },
                    success: function (data) {
                        $village.html('<option value="" selected>Choose Village</option>');
                        $.each(data, function (id, value) {
                            $village.append('<option value="' + id + '">' + value + '</option>');
                        });
                    }
                });
            });
        });
    </script>


{{-- Edit Data Lokasi --}}
<script>
    $(document).ready(function () {
        $('#update-data-prov').change(function () {
            var $regency = $('#update-data-regency');
            $.ajax({
                url: "{{ route('getRegency') }}",
                data: {
                    province_id: $(this).val()
                },
                success: function (data) {
                    $regency.html;
                    $.each(data, function (id, value) {
                        $regency.append('<option value="' + id + '">' + value + '</option>');
                    });
                }
            });
        });
        $('#update-data-regency').change(function () {
            var $district = $('#update-data-district');
            $.ajax({
                url: "{{ route('getDistrict') }}",
                data: {
                    regency_id: $(this).val()
                },
                success: function (data) {
                    $district.html('<option value="" selected>Choose District</option>');
                    $.each(data, function (id, value) {
                        $district.append('<option value="' + id + '">' + value + '</option>');
                    });
                }
            });
        });
        $('#update-data-district').change(function () {
            var $village = $('#update-data-village');
            $.ajax({
                url: "{{ route('getVillage') }}",
                data: {
                    district_id: $(this).val()
                },
                success: function (data) {
                    $village.html('<option value="" selected>Choose Village</option>');
                    $.each(data, function (id, value) {
                        $village.append('<option value="' + id + '">' + value + '</option>');
                    });
                }
            });
        });
    });
  </script>
@endsection