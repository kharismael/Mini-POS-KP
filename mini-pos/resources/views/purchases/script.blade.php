@section('scripts')

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>
  $('input[class="pick-date"]').daterangepicker({
      "singleDatePicker": true,
  });

    $(document).ready(function(){
      var tds = document.getElementById('count-it').getElementsByClassName('count-me');
      var sum = 0;
      for(var i = 0; i < tds.length; i ++) {
        if(tds[i].className == 'count-me') {
          sum += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
        }
      }
      document.getElementById('count-foot').innerHTML += '<tr><th></h><th></h><th></h><th></h><th>Total</h><th>' + sum + '</th><th></h></tr>';
    });
  
    $('.btn-cancel').click(function() {
    $('#cancel-purchases-form').attr('action', '/pembelian/' + $(this).data('id'))
    })

    $('.btn-finish').click(function() {
    $('#finish-purchases-form').attr('action', '/pembelian/' + $(this).data('id'))
    })
</script>
@endsection