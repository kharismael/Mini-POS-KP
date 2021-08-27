{{-- tambah lokasi --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    <script>
      $('.btn-edit').click(function(){
        $('#edit-supplier-form').attr('action','{{route('updateSupplier','')}}/'+ $(this).data('supplier_id'))
        $('#edit-supplier-name').val($(this).data('supplier_name'))
        $('#edit-supplier-telp').val($(this).data('supplier_telp'))
        $('#edit-supplier-address').val($(this).data('supplier_address'))
      })
    </script>

{{-- Update lokasi --}}
<script>
  $(document).ready(function () {
      $('#update_province_id').change(function () {
          var $regency = $('#update_regency_id');
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
      $('#update_regency_id').change(function () {
          var $district = $('#update_district_id');
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
      $('#update_district_id').change(function () {
          var $village = $('#update_village_id');
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