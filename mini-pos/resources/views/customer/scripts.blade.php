@section('scripts')
<script>
    setTimeout(function() {
        $('.alert').fadeOut('slow');}, 3000
    );
    $('.btn-delete').click(function() {
        $('#delete-customer-form').attr('action', '{{ route('customer.destroy', '') }}/' + $(this).data('id'))
        $('.span-delete').text($(this).data('name'));
    })
    $('.btn-edit').click(function() {
        $('#edit-cust-form').attr('action', '{{ route('customer.update', '') }}/' + $(this).data('cust_id'))
        $('#edit-cust-name').val($(this).data('cust_name'))
        $('#edit-cust-telp').val($(this).data('cust_telp'))
        $('#edit-cust-address').val($(this).data('cust_address'))
        $('#edit-cust-email').val($(this).data('cust_email'))
        $('#edit-cust-prov').val($(this).data('province_id'))
        $('#edit-cust-regency').val($(this).data('regency_id'))
        $('#edit-cust-district').val($(this).data('district_id'))
        $('#edit-cust-village').val($(this).data('village_id'))
    })

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