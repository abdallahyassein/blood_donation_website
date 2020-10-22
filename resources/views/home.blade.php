@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="jumbotron">
                <h1 class="display-4">Welcome,{{ Auth()->user()->name }}</h1>
                <p class="lead">we're happy to see you again.</p>
                <hr class="my-4">
                <p>go to dashboard check your points and free gifts.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Dashboard</a>
            </div>
        </div>
    </div>
</div>
@endsection
