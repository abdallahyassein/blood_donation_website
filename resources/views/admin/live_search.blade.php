
@extends('layouts.app')

@section('content')
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>

  <br/>
  <div class="container box">

  

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="opacity: 0.98;">


            <h1 align="center" class="display-5 font-italic">Search Clients</h1>


    </div>
   <div class="panel panel-default">
    <div class="panel-body">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" style="background-color: #d1d1d1;" placeholder="Search Clients Data" />
     </div>
     <div class="table-responsive">

      <table class="table table-striped table-dark table-bordered">
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


  <div class="row justify-content-center">
  <div class="col-md-4">
            <div class="card text-white bg-dark mb-3" style="width: 100;opacity: 0.95;">
                <img src="{{ asset('/images/blood_icon.jpg') }}" class="card-img-top" alt="blood icon" height="350" style="object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Statistics</h5>
                    <p class="card-text">check the amount of blood the institution has.</p>
                    <a href="statistics" class="btn btn-primary">details</a>
                </div>
            </div>
        </div>
    </div>
    </div>

<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('live_search.action') }}",
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
  fetch_customer_data(query);
 });
});
</script>
@endsection
