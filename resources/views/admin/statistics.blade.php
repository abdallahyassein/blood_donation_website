@extends('layouts.app')

@section('content')

<div class="container">


    <div class="row justify-content-center">


        <div class="col-md-4">

            <div class="card text-white bg-dark mb-3 text-center" style="width: 100;opacity: 0.98;">

                <div class="card-body">
                    <div class="chart" data-percent="{{($sumAPositive/1000)*100}}"></div>
                    <hr>
                    @if ($sumAPositive>=1000)
                        <h5 class="card-title" style="color:#A0F784 ;font-weight: bold;">We have a enough A+ Blood.</h5>
                    @else
                        <h5 class="card-title">{{$sumAPositive}} / 1000  <br> Blood Bag</h5>
                    @endif
                    <h2 class="card-title">A+</h5>


                </div>
            </div>
        </div>

        <div class="col-md-4">

            <div class="card text-white bg-dark mb-3 text-center" style="width: 100;opacity: 0.98;">

                <div class="card-body">
                    <div class="chart" data-percent="{{($sumANegative/1000)*100}}"></div>
                    <hr>
                    @if ($sumANegative>=1000)
                        <h5 class="card-title" style="color:#A0F784 ;font-weight: bold;">We have a enough A- Blood.</h5>
                    @else
                        <h5 class="card-title">{{$sumANegative}} / 1000  <br> Blood Bag</h5>
                    @endif
                    <h2 class="card-title">A-</h5>

     

                </div>
            </div>
        </div>

        <div class="col-md-4">

            <div class="card text-white bg-dark mb-3 text-center" style="width: 100;opacity: 0.98;">

                <div class="card-body">
                    <div class="chart" data-percent="{{($sumBPositive/1000)*100}}"></div>
                    <hr>
                    @if ($sumBPositive>=1000)
                        <h5 class="card-title" style="color:#A0F784 ;font-weight: bold;">We have a enough B+ Blood.</h5>
                    @else
                        <h5 class="card-title">{{$sumBPositive}} / 1000  <br> Blood Bag</h5>
                    @endif
                    <h2 class="card-title">B+</h5>

            

                </div>
            </div>
        </div>

        <div class="col-md-4">

            <div class="card text-white bg-dark mb-3 text-center" style="width: 100;opacity: 0.98;">

                <div class="card-body">
                    <div class="chart" data-percent="{{($sumBNegative/1000)*100}}"></div>
                    <hr>
                    @if ($sumBNegative>=1000)
                        <h5 class="card-title" style="color:#A0F784 ;font-weight: bold;">We have a enough B- Blood.</h5>
                    @else
                        <h5 class="card-title">{{$sumBNegative}} / 1000  <br> Blood Bag</h5>
                    @endif
                    <h2 class="card-title">B-</h5>

               

                </div>
            </div>
        </div>


        <div class="col-md-4">

            <div class="card text-white bg-dark mb-3 text-center" style="width: 100;opacity: 0.98;">

                <div class="card-body">
                    <div class="chart" data-percent="{{($sumOPositive/1000)*100}}"></div>
                    <hr>
                    @if ($sumOPositive>=1000)
                        <h5 class="card-title" style="color:#A0F784 ;font-weight: bold;">We have a enough O+ Blood.</h5>
                    @else
                        <h5 class="card-title">{{$sumOPositive}} / 1000  <br> Blood Bag</h5>
                    @endif
                    <h2 class="card-title">O+</h5>

         

                </div>
            </div>
        </div>


        <div class="col-md-4">

            <div class="card text-white bg-dark mb-3 text-center" style="width: 100;opacity: 0.98;">

                <div class="card-body">
                    <div class="chart" data-percent="{{($sumONegative/1000)*100}}"></div>
                    <hr>
                    @if ($sumONegative>=1000)
                        <h5 class="card-title" style="color:#A0F784 ;font-weight: bold;">We have a enough O- Blood.</h5>
                    @else
                        <h5 class="card-title">{{$sumONegative}} / 1000  <br> Blood Bag</h5>
                    @endif
                    <h2 class="card-title">O-</h5>

            

                </div>
            </div>
        </div>

        <div class="col-md-4">

            <div class="card text-white bg-dark mb-3 text-center" style="width: 100;opacity: 0.98;">

                <div class="card-body">
                    <div class="chart" data-percent="{{($sumABPositive/1000)*100}}"></div>
                    <hr>
                    @if ($sumABPositive>=1000)
                        <h5 class="card-title" style="color:#A0F784 ;font-weight: bold;">We have a enough AB+ Blood.</h5>
                    @else
                        <h5 class="card-title">{{$sumABPositive}} / 1000  <br> Blood Bag</h5>
                    @endif
                    <h2 class="card-title">AB+</h5>

                 

                </div>
            </div>
        </div>

        <div class="col-md-4">

            <div class="card text-white bg-dark mb-3 text-center" style="width: 100;opacity: 0.98;">

                <div class="card-body">
                    <div class="chart" data-percent="{{($sumABNegative/1000)*100}}"></div>
                    <hr>
                    @if ($sumABNegative>=1000)
                        <h5 class="card-title" style="color:#A0F784 ;font-weight: bold;">We have a enough AB- Blood.</h5>
                    @else
                        <h5 class="card-title">{{$sumABNegative}} / 1000  <br> Blood Bag</h5>
                    @endif
                    <h2 class="card-title">AB-</h5>

              
                </div>
            </div>
        </div>

        

     
     



    </div>


</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="{{ asset('js/jquery.easypiechart.js') }}" defer></script>
<script>
    $(function() {
        $('.chart').easyPieChart({
            barColor: '#CC3E32',
            trackColor: '#f9f9f9',
            scaleColor: '#dfe0e0',
            scaleLength: 5,
            lineCap: 'round',
            lineWidth: 10,
            trackWidth: undefined,
            size: 150,
            rotate: 0, // in degrees
            animate: {
                duration: 1500,
                enabled: true
            },

        });
    });
</script>

@endsection
