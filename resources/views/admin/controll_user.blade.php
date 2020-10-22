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
                    <h5 class="card-title" style="color:#A0F784;font-weight: bold;">He has exceeded the limit of donation</h5>
                    @else
                    <h5 class="card-title">{{$user->amount}} / 10</h5>
                    @endif
                    <h3 class="card-title">Blood Points</h3>
                    <hr>
                    <h2 class="card-title">{{$user->blood_type}}</h2>

                        <form action="{{route('editBloodPoints')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="points" id="points" class="form-control" style="background-color: #d1d1d1;" placeholder="Add Blood Points" />
                                <input name="phoneNumber" type="hidden" value="{{ $user->phoneNumber }}">
                                <hr>
                                <button type="submit" class="btn btn-primary">Add Points</button>
                            </div>
                        </form>



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
