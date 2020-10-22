@extends('layouts.app')

@section('content')


  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>




  <br />
  <div class="container box">
   <h3 align="center">Search Clients</h3><br/>
   <div class="panel panel-default">
    <div class="panel-heading">Search Users Data</div>
    <div class="panel-body">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search Friends" />
     </div>
     <div class="table-responsive">
      <h3 align="center">Total Data : <span id="total_records"></span></h3>
      <table class="table table-dark table-striped table-bordered">
       <thead>
        <tr>
         <th>Name</th>
         <th>Email</th>
         <th>Phone Number</th>
          <th>Blood Type</th>
          <th>Amount</th>
        
        </tr>
       </thead>
       <tbody>

       </tbody>
      </table>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 fetch_users_data();

 function fetch_users_data(query = '')
 {
  $.ajax({
   url:"search_clients/action",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_users_data(query);
 });
});
</script>

@endsection
