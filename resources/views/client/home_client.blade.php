@extends('layouts.app')

@section('content')
<div class="container">

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="opacity: 0.8;">
        <div class="col-md-6 px-0">
            <h1 class="display-5 font-italic">Welcome, {{ Auth()->user()->name }}</h1>
            <p class="lead my-3">We are so happy with you , your donation gonna help a lot of people.</p>

        </div>
    </div>
    <div class="row justify-content-center">



        <div class="col-md-4">
            <div class="card text-white bg-dark mb-3" style="width: 100;opacity: 0.95;">
                <img src="{{ asset('/images/blood_icon.jpg') }}" class="card-img-top" alt="blood icon" height="350" style="object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Blood Amount</h5>
                    <p class="card-text">check your blood amount you have donated.</p>
                    <a href="bloodpoints" class="btn btn-primary">Blood Points</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
