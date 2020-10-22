@extends('layouts.app')

@section('content')

<div class="container">


    <div class="row justify-content-center">


        <div class="col-md-4">
            <div class="card text-white bg-dark mb-3 text-center" style="width: 100;opacity: 0.98;">

                <div class="card-body">
                    <div class="chart" data-percent="{{($user->amount/10)*100}}"></div>
                    <hr>
                    @if ($user->amount>=10)
                        <h5 class="card-title" style="color:#A0F784 ;font-weight: bold;">Thanks A Lot, You have donated with the maximum amount of blood.</h5>
                    @else
                        <h5 class="card-title">{{$user->amount}} / 10</h5>
                    @endif
                    <h2 class="card-title">{{$user->blood_type}}</h5>

                    <hr>
                    <h3 class="card-title">Blood Amount</h5>

                </div>
            </div>
        </div>



    </div>

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="opacity: 0.8;">
        <div class="col-md-6 px-0">
            <h1 class="display-5 font-italic">Check Your Points</h1>
            <p class="lead my-3">Your donation will help a lot of people .</p>

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
